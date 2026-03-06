<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;   

class Application extends Model
{
     protected $fillable = [
        'name',
        'email',
        'phone',  
        'course_id',
        'education_level',
        'kcse_grade', 
        'status',
    ];
       public function course()
    {
         return $this->belongsTo(Course::class);
    }
}
