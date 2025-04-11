<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

Route::post('/createStudent', [StudentController::class, 'createStudent']);
Route::post('/createCourse', [CourseController::class, 'createCourse']);