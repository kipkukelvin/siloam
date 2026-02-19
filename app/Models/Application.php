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
        'course',
        'id_scan',
        'academic_certificates',
        'status',
    ];
       public function course()
    {
         return $this->belongsTo(Course::class, 'course');
    }
}
