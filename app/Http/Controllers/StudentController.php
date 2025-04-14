<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function createStudent(Request $request) {
    $incomingFields = $request->validate([
      'name' => ['required','min:3','max:50'],
      'email' => ['required','email','min:3','max:50']
    ]);

    Student::create($incomingFields);
    return 'New student has been posted!';
  }
}