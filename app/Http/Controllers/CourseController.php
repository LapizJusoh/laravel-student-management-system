<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  public function createCourse(Request $request) {
    $incomingFields = $request->validate([
      'name' => ['required','min:3','max:50']
    ]);

    Course::create($incomingFields);
    return redirect('/');
  }

  public function editCourse(Request $request) {
    
  }

  public function deleteCourse(Request $request) {
    
  }
}