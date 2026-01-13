<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function dean(){
      return view('school.dean');
    }
     public function contacts(){
      return view('partials.contacts');
    }
    public function career(){
      return view('school.career');
    }
}
