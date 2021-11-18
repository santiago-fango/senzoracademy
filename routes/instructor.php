<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\InstructorCourses;
use GuzzleHttp\Middleware;

Route::redirect('', 'instructor/courses');

Route::get('courses', InstructorCourses::class)->Middleware('can:Leer cursos')->name('courses.index');

