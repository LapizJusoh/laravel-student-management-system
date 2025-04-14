<?php

namespace App\Models;

use App\Models\ExamMark;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{   
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    use HasFactory;

    public function marks() {
        return $this->hasMany(ExamMark::class);
    }
}