<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function referral(){
      return view('school.earn-referral');
    }
    public function store(Request $request)
{
    $request->validate([
        'referrer_name' => 'required',
        'referrer_phone' => 'required',
        'student_name' => 'required',
        'student_phone' => 'required',
        'course' => 'required',
    ]);

    // Save to database (optional)
    // Referral::create([...]);

    return back()->with('success', 'Referral submitted successfully!');
}

}
