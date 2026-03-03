@extends('partials.layouts')

@section('title', 'Siloam Admissions')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Hero Section -->

<div class="position-relative">
    <img src="{{ asset('assets/images/ADM.jpeg') }}"
         class="img-fluid w-100"
         style="height:350px; object-fit:cover;"
         alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark"
     style="opacity: 0.80;"></div>
<div class="position-absolute top-0 start-50 translate-middle-x text-white text-center w-100 pt-5">
    <a href="{{ route('academic.application') }}"
       class="btn ab px-4 py-2 rounded-pill">
        <i class="fas fa-pen-nib me-2 "></i> Apply Now
    </a>
</div>

</div>
<div class="container-fluid bg w-100 text-dark mt-sm-1 py-4">
  <h2 class="text-center text-white fw-bold m-0">
    Admission
  </h2>
</div>
<!-- Admission Content -->
<section class="container text-muted">

    <div class="card border-0">
        <div class="card-body">
            <div class="row g-4 align-items-start">

                <!-- Left Column: Image -->
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/adm1.jpg') }}"
                         class="img-fluid w-100 rounded"
                         alt="Admission Image">
                </div>

                <!-- Right Column: Content -->
                <div class="col-md-7 fs-5">

                    <h6 class="text-primary mb-3 fs-4">
                        To join us, follow the steps below:
                    </h6>

                    <ol class="mb-4">
                        <li>Choose your preferred programme and ensure you meet the qualifications listed under <strong>Our Programmes</strong>.</li>
                        <li>Click on <strong>Apply Now</strong> at the top or bottom of this page.</li>
                        <li>Fill in all required information in each step.</li>
                        <li>Complete and submit your application.</li>
                        <li>You will receive a confirmation email once submitted successfully.</li>
                        <li>Pay a non-refundable application fee of <strong>Kshs. 1,500</strong>.</li>
                    </ol>

                    <h6 class="text-primary mb-3 fs-4">
                        Applicants must present the following:
                    </h6>

                    <ol>
                        <li>Two recent passport-size photographs (name written on the back).</li>
                        <li>At least two academic certificates (e.g. KCPE & KCSE).</li>
                        <li>Copy of National ID or Birth Certificate.</li>
                        <li>Original certificates for verification on reporting date.</li>
                        <li>Medical insurance cover (e.g SHA)</li>
                    </ol>

                </div>

            </div>

        </div>
    </div>
</section>
    <div class="container-fluid bg-light text-center py-5">

        <h4 class="fw-bold text-warning-emphasis">Start Your Journey</h4>
<span style="display:block; width:300px; height:2px; background:#2c054b; margin:5px auto 0;"></span>
        <p class="text-secondary mt-3 mb-3">    
            Join our <strong>accredited programs</strong>, learn from
            <strong>experienced faculty</strong>, and train in
            <strong>modern, well-equipped facilities</strong> designed to prepare you
            for a successful healthcare career.
        </p>

        <small class="text-muted d-block">
            Applications are now open for the upcoming intake. Secure your spot today and begin your journey toward a rewarding healthcare career. Limited seats available!
        </small>
        <P class="mb-3">2026 Intake Ongoing</strong><br>Don't miss out!</P>
        <a href="{{ route('academic.application') }}" 
           class="btn ab btn-lg rounded-pill d-inline-flex align-items-center justify-content-center"
           style="gap: 8px;">
            <i class="fas fa-paper-plane"></i>
            Apply Now
        </a>
    </div>
</div>

@endsection