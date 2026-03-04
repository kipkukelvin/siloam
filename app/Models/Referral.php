<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;
    protected $fillable = [
    'referrer_name',
    'referrer_phone',
    'student_name',
    'student_phone',
    'course_id',
];

}
