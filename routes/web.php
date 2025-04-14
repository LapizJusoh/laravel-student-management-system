<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamMarkController;

Route::get('/', function () {

    $students = DB::table('students')->select('id','name','email')->get();
    $courses = DB::table('courses')->select('id','name')->get();
    return view('home',[
        'students' => $students,
        'courses' => $courses
    ]);
});

Route::post('/createStudent', [StudentController::class, 'createStudent']);
Route::get('/editStudent/{student}', [StudentController::class, 'editStudent']);
Route::put('/editStudent/{student}', [StudentController::class, 'updateStudent']);

Route::post('/createCourse', [CourseController::class, 'createCourse']);
Route::post('/createExamMark', [ExamMarkController::class, 'createExamMark']);