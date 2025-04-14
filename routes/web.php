<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {

    $students = DB::table('students')->select('id','name','email')->get();
    $courses = DB::table('courses')->select('id','name')->get();
    return view('home',[
        'students' => $students,
        'courses' => $courses
    ]);
});

Route::post('/createStudent', [StudentController::class, 'createStudent']);
Route::post('/createCourse', [CourseController::class, 'createCourse']);