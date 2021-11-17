<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\course;
use App\Models\category;
use App\Models\level;

use Livewire\WithPagination;

class CourseIndex extends Component
{

    use WithPagination;

    public $category_id;
    public $level_id;

    public function render()
    {

        $categories = category::all();
        $levels = level::all();

        $courses = course::where('status', 3)
                            ->category($this->category_id)
                            ->level($this->level_id)
                            ->latest('id')
                            ->paginate(8);
        return view('livewire.course-index', compact('courses', 'categories', 'levels'));
    }

    public function resetFilters(){
        $this->reset(['category_id', 'level_id']);
    }
}
