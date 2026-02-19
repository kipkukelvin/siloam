<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
       protected $fillable = [
        'student_no','name',
        'phone','email','course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
