<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $courses = Course::orderBy('name')->get();
    return view('academic.application', compact('courses'));
       // return view('academic.application');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'course' => 'required|exists:courses,id',
            'education_level' => 'required',
            'kcse_grade' => 'nullable'
        ]);

        // You can save to DB here 
       $application = Application::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'course_id' => $data['course'],
            'education_level' => $data['education_level'],
            'kcse_grade' => $data['kcse_grade'],
        ]);
          $application->load('course'); 
         
          Mail::send('emails.admission', [ 
            'app' => $application
        ], function ($message) {
            $message->to('info.siloamict@gmail.com')
                    ->subject('New Course Application');
        });
           Mail::send('emails.user_confirmation', [
            'name' => $application->name,
            'course' => optional($application->course)->name ?? 'N/A',
        ], function ($message) use ($application) {
            $message->to($application->email)
                    ->subject('Application Received');
        });
        // Application::create([...]);
        return back()->with('success', 'Application submitted successfully!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
