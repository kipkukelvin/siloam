@extends('partials.layouts')

@section('title', 'Siloam Admissions')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Hero Section -->

    <div class="position-relative">
        <img src="{{ asset('assets/images/ADM.jpeg') }}" class="img-fluid w-100" style="height:350px; object-fit:cover;"
            alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.80;"></div>
        <div class="position-absolute top-0 start-50 translate-middle-x text-white text-center w-100 pt-5">
            <a href="{{ route('academic.application') }}" class="btn ab px-4 py-2 rounded-pill">
                <i class="fas fa-pen-nib me-2 "></i> Apply Now
            </a>
        </div>

    </div>
    <div class="container-fluid bg w-100 text-dark mt-sm-1 py-4">
        <h1 class="text-center hf text-white fw-bold m-0">
            Admission
        </h1>
    </div>
    <!-- Admission Content -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 hf">Application
                 Process</h2>

            <div class="row text-center g-4">
                <div class="col-md-4 d-none d-md-block">
                    <img src="{{ asset('assets/images/adm1.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="Admission Process Image" style="object-fit: cover; max-height: 500px; width: 100%;">
                </div>
                <!-- Step 1: Choose Program -->
                <div class="col-md-8">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm p-4 border-0">
                                <i class="fa fa-search fa-2x text-primary mb-3"></i>
                                <h5 class="fw-bold">1. Choose Your Program</h5>
                                <p>
                                    Select your preferred programme and ensure you meet the qualifications listed under Our
                                    Programmes.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2: Apply Online -->
                        <div class="col-md-6">
                            <div class="card h-100 shadow-sm p-4 border-0">
                                <i class="fa fa-file-alt fa-2x text-success mb-3"></i>
                                <h5 class="fw-bold">2. Apply Online</h5>
                                <p>
                                    Click "Apply Now" at the top or bottom of this page. Fill in all required information in
                                    each step and submit your application.
                                    You will receive a confirmation email once submitted successfully.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Pay Application Fee -->
                <div class="row g-4 mt-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm p-4 border-0">
                            <i class="fa fa-credit-card fa-2x text-info mb-3"></i>
                            <h5 class="fw-bold">3. Pay Application Fee</h5>
                            <p>
                                Pay a non-refundable application fee of Kshs. 1,500 via M-Pesa, bank transfer, or online
                                payment to complete your application.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4: Submit Documents -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm p-4 border-0">
                            <i class="fa fa-upload fa-2x text-warning mb-3"></i>
                            <h5 class="fw-bold">4. Submit Supporting Documents</h5>
                            <p>
                                
                                Applicants must provide the following on reporting date:
                            <ul class="text-start mb-0 ps-3">
                                <li>Two recent passport-size photos (name on the back)</li>
                                <li>At least two academic certificates (e.g., KCPE & KCSE)</li>
                                <li>Original and copy of National ID or Birth Certificate</li>
                                <li>Proof of payment for the application fee</li>
                                <li>Medical insurance cover (e.g., SHA)</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <!-- Step 5: Admission Review & Interview -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm p-4 border-0">
                            <i class="fa fa-comments fa-2x text-danger mb-3"></i>
                            <h5 class="fw-bold">5. Admission Review / Interview</h5>
                            <p>
                                Our admissions team will review your application and may invite you for an interview to
                                confirm eligibility.
                            </p>
                        </div>
                    </div>

                    <!-- Step 6: Receive Admission Letter -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm p-4 border-0">
                            <i class="fa fa-envelope-open-text fa-2x text-secondary mb-3"></i>
                            <h5 class="fw-bold">6. Receive Admission Letter</h5>
                            <p>
                                Once approved, you’ll receive an official admission letter via email or post with class
                                schedules and further instructions.
                            </p>
                        </div>
                    </div>

                    <!-- Step 7: Orientation & Enrollment -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm p-4 border-0">
                            <i class="fa fa-user-graduate fa-2x text-primary mb-3"></i>
                            <h5 class="fw-bold">7. Orientation & Enrollment</h5>
                            <p>
                                Attend orientation and complete enrollment to officially start your programme.
                            </p>
                        </div>
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
            Applications are now open for the upcoming intake. Secure your spot today and begin your journey toward a
            rewarding healthcare career. Limited seats available!
        </small>
        <P class="mb-3">2026 Intake Ongoing</strong><br>Don't miss out!</P>
        <a href="{{ route('academic.application') }}"
            class="btn ab btn-lg rounded-pill d-inline-flex align-items-center justify-content-center" style="gap: 8px;">
            <i class="fas fa-paper-plane"></i>
            Apply Now
        </a>
    </div>
    </div>

@endsection
