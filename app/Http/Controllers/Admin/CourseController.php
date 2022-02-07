<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\course;

class CourseController extends Controller
{
    public function index(){

        $courses = course::where('status', 2)->paginate(); 

        return view('admin.courses.index', compact('courses'));
    }

    public function show(course $course){

        $this->authorize('revision', $course);

        return view('admin.courses.show', compact('course'));
    }

    public function approved(course $course){

        $this->authorize('revision', $course);

        if (!$course->lessons || !$course->goals || !$course->requirements || !$course->image) {
            return back()->with('info', 'No se puede publicar el curso, esta incompleto');
        }
        
        $course->status = 3;
        $course->save();

        return redirect()->route('admin.courses.index')->with('info', 'El curso se publico con exito');
    }

    public function observation(course $course){
        return view('admin.courses.observation', compact('course'));
    }

    public function reject(Request $request, course $course){

        $request->validate([
            'body' => 'required'
        ]);

        $course->observation()->create($request->all());

        $course->status = 1;
        $course->save();

        return redirect()->route('admin.courses.index')->with('info', 'El curso se ha rechazado con exito');
    }
}
