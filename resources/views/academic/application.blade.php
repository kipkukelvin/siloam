@extends('partials.layouts')

@section('title','Siloam College - Application Form')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="container my-5 mt-5 pt-5 d-flex justify-content-center">
    
    <div class="form-wrapper">

        <!-- Floating Logo -->
        <div class="form-icon">
            <img src="{{ asset('assets/images/ICON.jpg') }}" 
                 alt="Siloam College Logo">
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

                <!-- ID Upload -->
                <label class="form-label mt-3">Upload ID</label>
                <input type="file" name="id_scan" class="form-control" required>

                <!-- Certificates Upload -->
                <label class="form-label mt-3">Academic Certificates</label>
                <input type="file" name="academic_certificates" class="form-control" required>

                <!-- Submit Button -->
                <button class="btn btn-success w-100 mt-4" type="submit">
                    Submit Application
                </button>

            </form>

        </div>
    </div>

</div>

@endsection
