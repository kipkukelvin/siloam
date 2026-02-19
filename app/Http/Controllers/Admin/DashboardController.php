<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Student;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard',[
            'applications'=>Application::count(),
            'students'=>Student::count(),
            'courses'=>Course::count(),
        ]);
    }
}
