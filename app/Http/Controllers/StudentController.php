<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function create(Request $request) {
    $incomingFields = $request->validate([
      'name' => 'required',
      'email' => ['required','email']
    ]);

    Student::create($incomingFields);
    return 'New student has been posted!';
  }
}