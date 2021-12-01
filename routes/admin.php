<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\homeController;
use App\Http\Controllers\Admin\roleController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\Admin\CourseController;

Route::get('', [homeController::class, 'index'])->name('home'); 

Route::resource('roles', roleController::class)->names('roles');

Route::resource('users', userController::class)->only('index', 'edit', 'update')->names('users');

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->name('courses.approved');

Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation');

Route::post('courses/{course}/reject', [CourseController::class, 'reject'])->name('courses.reject');