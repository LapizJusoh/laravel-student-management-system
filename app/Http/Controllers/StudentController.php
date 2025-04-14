<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function createStudent(Request $request) {
    $students = DB::table('students')->select('id','name','email')->get();
    $courses = DB::table('courses')->select('id','name')->get();
    
    $incomingFields = $request->validate([
      'name' => ['required','min:3','max:50'],
      'email' => ['required','email','min:3','max:50']
    ]);

    Student::create($incomingFields);
    
    return redirect('/');
  }

  public function editStudent(Student $student) {
    return view('edit-student', ['student' => $student]);
  }

  public function updateStudent(Student $student, Request $request) {
    $incomingFields = $request->validate([
      'name' => ['required','min:3','max:50']
    ]);
    
    $student->update($incomingFields);
    return redirect('/');
  }


  public function deleteStudent(Request $request) {
    
  }


}