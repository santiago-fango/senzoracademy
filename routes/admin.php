<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\homeController;
use App\Http\Controllers\Admin\roleController;
use App\Http\Controllers\admin\userController;


Route::get('', [homeController::class, 'index'])->name('home');

Route::resource('roles', roleController::class)->names('roles');

Route::resource('users', userController::class)->only('index', 'edit', 'update')->names('users');