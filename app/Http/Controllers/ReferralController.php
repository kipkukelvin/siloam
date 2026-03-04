<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Referral;

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
        $validated = $request->validate([
            'referrer_name' => 'required|string|max:255',
            'referrer_phone' => 'required|string|max:20',
            'student_name' => 'required|string|max:255',
            'student_phone' => 'required|string|max:20',
            'course_id' => 'required|exists:courses,id',
        ]);

        Referral::create($validated);

        return back()->with('success', 'Referral submitted successfully!');
    }
}
