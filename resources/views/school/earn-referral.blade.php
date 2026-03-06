@extends('partials.layouts')

@section('title', 'Earn by Referring')

@section('content')

<!-- Hero Section -->
<section class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="fw-bold display-5">Earn by Referring Students</h1>
        <p class="lead mt-3">
            Refer students to Siloam Medical & Technical College and earn commission for every successful enrollment.
        </p>
        <a href="#referForm" class="btn btn-warning btn-lg mt-3 px-4">
            Start Referring
        </a>
    </div>
</section>

<!-- How It Works -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">How It Works</h2>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4">
                    <i class="fa fa-user-plus fa-2x text-primary mb-3"></i>
                    <h5 class="fw-bold">1. Refer a Student</h5>
                    <p>Share our programs with prospective students and submit their details through our referral form.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4">
                    <i class="fa fa-check-circle fa-2x text-success mb-3"></i>
                    <h5 class="fw-bold">2. Student Enrolls</h5>
                    <p>Once the student enrolls and pays fees, your referral is verified.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4">
                    <i class="fa fa-money-bill-wave fa-2x text-warning mb-3"></i>
                    <h5 class="fw-bold">3. Get Paid</h5>
                    <p>You receive your commission directly via M-Pesa or bank transfer.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ================= REFERRAL BONUS SECTION ================= --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Referral Commission</h2>
            <p class="text-muted">Earn more as you refer more students</p>
        </div>

        <div class="row g-4">

            {{-- 1-10 Students --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100 text-center">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">1 – 10 Students</h5>
                        <h3 class="text-success fw-bold">Ksh 1,000</h3>
                        <p class="mb-0 text-muted">Per Student</p>
                    </div>
                </div>
            </div>

            {{-- 11-15 Students --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100 text-center">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">11 – 15 Students</h5>
                        <h3 class="text-success fw-bold">Ksh 1,500</h3>
                        <p class="mb-0 text-muted">Per Student</p>
                    </div>
                </div>
            </div>

            {{-- 16-20 Students --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100 text-center">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">16 – 20 Students</h5>
                        <h3 class="text-success fw-bold">Ksh 2,000</h3>
                        <p class="mb-0 text-muted">Per Student</p>
                    </div>
                </div>
            </div>

            {{-- 21+ Students --}}
            <div class="col-md-3">
                <div class="card shadow-sm border-0 h-100 text-center border-success">
                    <div class="card-body">
                        <h5 class="fw-bold text-dark">21+ Students</h5>
                        <h3 class="text-success fw-bold">Ksh 2,500</h3>
                        <p class="mb-0 text-muted">Per Student</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Payment Notice --}}
        <div class="alert alert-info mt-5 text-center shadow-sm">
            <strong>Payment Policy:</strong><br>
            Payments are processed <strong>two weeks after</strong> the referred student's classes commence.
        </div>
    </div>
</section>
{{-- ================= END REFERRAL BONUS SECTION ================= --}}



<!-- Referral Form -->
<section id="referForm" class="py-5">
    <div class="container">
        <div class="card shadow p-4">
            <h3 class="fw-bold mb-4 text-center">Submit a Referral</h3>

            <form method="POST" action="{{ route('school.earn-referral.store') }}">
                @csrf

                <div class="row">
<div class="col-md-6 mb-3">
<label>Your Full Name</label>
<input type="text" name="referrer_name" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Your Phone Number</label>
<input type="tel" name="referrer_phone" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Student Full Name</label>
<input type="text" name="student_name" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Student Phone Number</label>
<input type="tel" name="student_phone" class="form-control" required>
</div>


<div class="col-md-12 mb-3">
    <label>Preferred Course</label>
    <select name="course_id" class="form-select" required>
        <option value="">Select Course</option>

        @foreach($courses as $course)
            <option value="{{ $course->id }}">
                {{ $course->name }} ({{ $course->level }})
            </option>
        @endforeach

    </select>
</div>

                </div>

                <div class="text-center">
                    <button class="btn btn-success btn-lg px-5">
                        Submit Referral
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="bg-1 text-white text-center py-5">
    <div class="container">
        <h3 class="fw-bold">Start Earning Today!</h3>
        <p class="mb-3">Partner with Siloam College and earn while helping students achieve their dreams.</p>
        <a href="{{ route('academic.programs') }}" class="btn btn-light px-4">
            View Our Programs
        </a>
    </div>
</section>

@endsection
