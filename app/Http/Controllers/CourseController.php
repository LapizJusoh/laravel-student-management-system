<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  public function createCourse(Request $request) {
    $incomingFields = $request->validate([
      'name' => 'required',
    ]);

    Course::create($incomingFields);
    return 'New course has been posted!';
  }
}