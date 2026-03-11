@extends('partials.layouts')

@section('title','Siloam College - Application Form')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="container my-5 mt-5 pt-5 d-flex justify-content-center">
    
    <div class="form-wrapper">

        <!-- Floating Logo -->
        <div class="form-icon">
            <img src="{{ asset('assets/images/ICON.jpg') }}" 
                 alt="Siloam College Logo" loading="lazy">
        </div>

        <div class="card shadow-lg p-4 bg-light pt-5">

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h2 class="mb-4 text-center fw-bold mt-3">Course Application Form</h2>

            <form action="{{ route('academic.application.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf

                <!-- Full Name -->
                <label class="form-label">Full Names</label>
                <input type="text" name="name" class="form-control" required>

                <!-- Email -->
                <label class="form-label mt-3">Email</label>
                <input type="email" name="email" class="form-control" required>

                <!-- Phone -->
                <label class="form-label mt-3">Phone Number</label>
                <input id="phone" name="phone" type="tel" class="form-control" required>

                <!-- Course -->
                <label class="form-label mt-3">Select Course</label>
                <select name="course" class="form-select" required>
                    <option value="">-- Select Course --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>

<label class="form-label mt-3">Level of Education</label>
<select name="education_level" class="form-select" onchange="toggleGrade()" required>
    <option value="">-- Select Level --</option>
    <option value="kcse">KCSE</option>
    <option value="kcpe">KCPE</option>
    <option value="certificate">Certificate</option>
</select>

<!-- KCSE Grade (Hidden Initially) -->
<div id="kcse_grade_div" style="display:none;">
    <label class="form-label mt-3">KCSE Mean Grade</label>
    <select name="kcse_grade" class="form-select">
        <option value="">-- Select Grade --</option>
        <option>A</option>
        <option>A-</option>
        <option>B+</option>
        <option>B</option>
        <option>B-</option>
        <option>C+</option>
        <option>C</option>
        <option>C-</option>
        <option>D+</option>
        <option>D</option>
        <option>D-</option>
    </select>
</div>
<div class="form-check mt-3">
    <input class="form-check-input" type="checkbox" name="confirm_documents" required>
    <label class="form-check-label">
        I confirm that I will present my original academic documents during admission.
    </label>
</div>

                <!-- Submit Button -->
                <button class="btn btn-success w-100 mt-4" type="submit">
                    Submit Application
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
