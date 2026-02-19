<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Student;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('admin.applications.index',[
            'applications'=>Application::with('course')->get()
        ]);
    }

    public function approve(Application $application)
    {
        Student::create([
            'student_no'=>'SILOAM'.rand(1000,9999),
            'full_name'=>$application->full_name,
            'phone'=>$application->phone,
            'email'=>$application->email,
            'course_id'=>$application->course_id,
        ]);

        $application->update(['status'=>'Approved']);

        return back();
    }

    public function reject(Application $application)
    {
        $application->update(['status'=>'Rejected']);
        return back();
    }
}
