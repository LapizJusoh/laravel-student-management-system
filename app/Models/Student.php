<?php

namespace App\Models;

use App\Models\ExamMark;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{   
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email'];
    use HasFactory;

    public function marks() {
        return $this->hasMany(ExamMark::class);
    }
}
