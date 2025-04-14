<?php

namespace App\Http\Controllers;

use App\Models\ExamMark;
use Illuminate\Http\Request;

class ExamMarkController extends Controller
{
  public function createExamMark(Request $request) {

    $incomingFields = $request->validate([
      'student_id' => ['required','min:1','max:3'],
      'course_id' => ['required','min:1','max:3'],
      'marks' => ['required','min:1','max:3']
    ]);

    ExamMark::create($incomingFields);
    return 'New Exam Marks has been added!';
  }
}