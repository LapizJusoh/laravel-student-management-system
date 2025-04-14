<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamMark extends Model
{   
    protected $table = 'exam_marks';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id','course_id','marks'];
    use HasFactory;
}