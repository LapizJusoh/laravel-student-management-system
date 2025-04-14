<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/studentsView', function () {

    $students = DB::table('students')->select('id','name','email')->get();
    return view('students',[
        'students' => $students
    ]);
});

Route::post('/createStudent', [StudentController::class, 'createStudent']);
Route::post('/createCourse', [CourseController::class, 'createCourse']);