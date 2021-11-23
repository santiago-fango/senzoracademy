<?php

namespace App\Http\Livewire\Instructor;

use App\Models\lesson;
use App\Models\platform;
use App\Models\section;
use Livewire\Component;

class CoursesLesson extends Component
{
    public $section, $lesson, $platforms, $name, $platform_id = 1, $url;

    protected $rules = [
        'lesson.name' => 'required',
        'lesson.platform_id' => 'required',
        'lesson.url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
    ];

    public function mount(section $section){
        $this->section = $section;

        $this->platforms = platform::all();

        $this->lesson = new lesson();
    } 

    public function render()
    {
        return view('livewire.instructor.courses-lesson');
    }

    public function store(){
        $rules = [
            'name' => 'required',
            'platform_id' => 'required',
            'url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
        ];

        if ($this->platform_id == 2) {
            $rules ['url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
        }

        $this->validate($rules);

        lesson::create([
            'name' => $this->name,
            'platform_id' => $this->platform_id,
            'url' => $this->url,
            'section_id' => $this->section->id
        ]);

        $this->reset(['name', 'platform_id', 'url']);
        $this->section = section::find($this->section->id); 
    }

    public function edit(lesson $lesson){
        $this->resetValidation();

        $this->lesson = $lesson;
    }

    public function update(){
        if ($this->lesson->platform_id == 2) {
            $this->rules['lesson.url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
        }
        $this->validate();

        $this->lesson->save();
        $this->lesson =new lesson();

        $this->section = section::find($this->section->id);
    }

    public function destroy(lesson $lesson){
        $lesson->delete();
        $this->section = section::find($this->section->id);
    }

    public function cancel(){
        $this->lesson =new lesson();
    }


}
