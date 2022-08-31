<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\courseController;

use App\Http\Livewire\CourseStatus;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', homeController::class )->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('cursos', [courseController::class, 'index'])->name('courses.index');


Route::get('cursos/{course}', [courseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/enrolled', [courseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');


Route::get('course-status/{course}', CourseStatus::class)->name('courses.status')->middleware('auth');


Route::get('pages/cursos-presenciales', function(){
    return view('pages.cursos-presenciales');
})->name('cursos-presenciales');

Route::get('pages/inyeccion-electronica', function(){
    return view('pages.inyeccion-electronica');
})->name('inyeccion-electronica');

Route::get('pages/electricidad-basica', function(){
    return view('pages.electricidad-basica');
})->name('electricidad-basica');