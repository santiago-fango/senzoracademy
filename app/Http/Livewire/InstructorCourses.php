<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\course;
use Livewire\WithPagination;

class InstructorCourses extends Component
{

    use WithPagination;

    public $search;

    public function render()
    {

        $courses = course::where('title', 'LIKE', '%' . $this->search . '%')
                            ->where('user_id', auth()->user()->id)
                            ->paginate(8);

        return view('livewire.instructor-courses', compact('courses'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
