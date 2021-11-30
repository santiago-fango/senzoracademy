<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;
use App\Models\course;
use App\Models\section;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CoursesCurriculum extends Component
{
    public function __construct(){
        $this->middleware('can:Actualizar cursos')->only('index');
   }

    use AuthorizesRequests;

    public $course, $section, $name;

    protected $rules = [
        'section.name' => 'required'
    ];

    public function mount(Course $course){

        $this->course = $course;
        $this->section = new section();

        $this->authorize('dictated', $course);

    }


    public function render()
    {
        return view('livewire.instructor.courses-curriculum')->layout('layouts.instructor ');
    }

    public function store(){

        $this->validate([
            'name' => 'required'
        ]);

        section::create([
            'name' => $this->name,
            'course_id' => $this->course->id
        ]);

        $this->reset('name');
        $this->course = Course::find($this->course->id);
    }

    public function edit(section $section){
         $this->section = $section;
    }

    public function update(){

        $this->validate();

        $this->section->save();
        $this->section = new section();

        $this->course = Course::find($this->course->id);
    }

    public function destroy(section $section){
        $section->delete();
        $this->course = Course::find($this->course->id);
    }
}
