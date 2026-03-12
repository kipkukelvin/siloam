@extends('partials.layouts')
@section('title', 'SMTC || Our-Programs')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <div class="position-relative mt-auto">
        <img src="{{ asset('assets/images/ckr.jpg') }}" class="img-fluid w-100" style="height:400px; object-fit:cover;"
            alt="" loading="lazy">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.75;"></div>
        <div class="position-absolute top-25 bottom-0 start-0 ps-5 translate-middle-y text-white">
            <h1 class="hero-title fw-bold  text-uppercase text-center fst-italic">Our courses</h1>
        </div>

    </div>
    <main class="container fw-normal mb-4 pt-3 fs-5 fst-italic">
        <div class="row g-4">

            <!-- Orthopedics -->
            <div class="column col-md-4">
                <div class="rounded border shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/orth.png') }}" class="img-fluid w-100 rounded-top" loading="lazy">
                    <h5 class="fw-bold text-center p-2 mb-1">
                        Orthopedics & Trauma Medicine
                    </h5>
                    <p class="text-muted p-2 mb-0">
                        A program focusing on musculoskeletal injuries, trauma care, orthopedic conditions, and
                        rehabilitation techniques.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}" class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.orthopedics') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nursing -->
            <div class="column col-md-4">
                <div class="border  rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/Nursing_50.jpg') }}" class="img-fluid rounded-top w-100"
                        loading="lazy">
                    <h5 class="fw-bold p-2 mb-1 text-center">
                        Nursing (KRCHN)
                    </h5>
                    <p class="text-muted p-2 mb-0">
                        Provides essential nursing knowledge and practical skills including patient care, basic anatomy and
                        physiology, vital signs monitoring, infection control, first aid, and ethical practices in
                        healthcare.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}" class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.nursing') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- CNA -->
            <div class="column col-md-4">
                <div class="border rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/cna.jpg') }}" class="img-fluid w-80 rounded-top" loading="lazy">
                    <h5 class="fw-bold p-2 mb-1">
                        Certified Nurse Assistant
                    </h5>
                    <p class="text-muted mb-0 p-2">
                        Trains students in essential patient care skills, basic nursing procedures, and professional
                        healthcare support.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}" class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.cna') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- PPTT -->
            <div class="column col-md-4">
                <div class="border rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/PERIP.jpg') }}" class="img-fluid w-100 rounded-top" loading="lazy">
                    <h5 class="fw-bold mb-1 text-center">
                        Perioperative Theatre Technology
                    </h5>
                    <p class="text-muted mb-0 p-2 ms-2">
                        Covers surgical procedures, theatre management, sterilization, and assisting surgeons in the
                        operating room.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.pptt') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <!-- Computer Packages -->
            <div class="column col-md-4">
                <div class="border  rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/lapi.jpg') }}" class="img-fluid rounded-top w-100" loading="lazy">
                    <h5 class="fw-bold p-2 mb-1 text-center">
                        <a class="text-decoration-none text-dark">
                            Computer Packages
                    </h5>
                    <p class="text-muted p-2 mb-0 ms-2">
                        Offers essential computer skills including MS Office, internet use, data entry, and digital
                        literacy.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.packages') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </main>

@endsection
