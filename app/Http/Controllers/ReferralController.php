<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Referral;
use Illuminate\Support\Facades\Mail;

class ReferralController extends Controller
{
  public function referral()
    {
        $courses = Course::orderBy('name')->get();

        return view('school.earn-referral', compact('courses'));
    }

    // Store referral
    public function store(Request $request)
    {
           $data = $request->validate([
        'referrer_name' => 'required',
        'referrer_phone' => 'required',
        'student_name' => 'required',
        'student_phone' => 'required',
        'course_id' => 'required|exists:courses,id'
    ]);

    $course = Course::find($data['course_id']);

    Mail::send('emails.referral', [
        'data' => $data,
        'course' => $course->name
    ], function ($message) {
        $message->to('info.siloamict@gmail.com')
                ->subject('New Student Referral');
    });

    return back()->with('success','Referral submitted successfully!');
    }
}
