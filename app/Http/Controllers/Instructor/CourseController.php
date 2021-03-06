<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

use App\Models\course;
use App\Models\level;
use App\Models\price;

use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    public function __construct(){

        $this->middleware('can:Leer cursos')->only('index');
    
        $this->middleware('can:Crear cursos')->only('create', 'store');
    
        $this->middleware('can:Actualizar cursos')->only('edit', 'update', 'goals');
    
        $this->middleware('can:Eliminar cursos')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('instructor.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::pluck('name', 'id');

        $levels = level::pluck('name', 'id');

        $prices = price::pluck('name', 'id');

        return view('instructor.courses.create', compact('categories', 'levels', 'prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         =>  'required',
            'slug'          =>  'required|unique:courses',
            'subtitle'      =>  'required',
            'description'   =>  'required',
            'category_id'   =>  'required',
            'level_id'      =>  'required',
            'price_id'      =>  'required',
            'file'          =>  'image'
        ]);   
        
        $course = course::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('courses', $request->file('file'));

            $course->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        return view('instructor.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {

        $this->authorize('dictated', $course);

        $categories = category::pluck('name', 'id');

        $levels = level::pluck('name', 'id');

        $prices = price::pluck('name', 'id');

        return view('instructor.courses.edit', compact('course', 'categories', 'levels', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {

        $this->authorize('dictated', $course);

        $request->validate([
            'title'         =>  'required',
            'slug'          =>  'required|unique:courses,slug,' . $course->id,
            'subtitle'      =>  'required',
            'description'   =>  'required',
            'category_id'   =>  'required',
            'level_id'      =>  'required',
            'price_id'      =>  'required',
            'file'          =>  'image'
        ]);   

        $course->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('courses', $request->file('file'));

            if ($course->image) {
                Storage::delete($course->image->url);

                $course->image->update([
                    'url' => $url
                ]);
            }else{
                $course->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }

    public function goals(course $course){
        $this->authorize('dictated', $course);
        return view('instructor.courses.goals', compact('course'));
        
    }

    public function status(course $course){
        $course->status = 2;
        $course->save();

        if ($course->observation) {
            $course->observation->delete();
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    public function observation(course $course){
        return view('instructor.courses.observation', compact('course'));
    }
}
