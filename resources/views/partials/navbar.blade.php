<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="bg text-white fixed-top py-1" style="z-index:1100;">
    <marquee id="intakeMarquee"behavior="scroll" direction="left">
        Admissions Open for 2026 🎓 --
        <a href="{{ route('academic.application') }}" class="btn hf btn-warning btn-sm mx-2"
            style="font-weight: bold; border-radius: 20px;">
            Apply Now
        </a>
        -- Enroll Today -- Secure Your Future! 🚀
    </marquee>
</div>
<div id="mainNavbar" class="container-fluid shadow-sm fixed-top hf" style="top:8px; z-index:1000;">

    <div style="margin-top:30px;"></div>
    <header class="d-flex justify-content-between align-items-center text-danger py-3 bg-opacity-50">
        <!-- Logo + Nav -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center text-decoration-none me-4" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/WEB.png') }}" class="img-fluid me-2" alt="Logo"
                    style="height: 55px; object-fit: contain;">
            </a>

            <ul class="nav nav-pills hf">
                <li class="nav-item text-uppercase"><a href="{{ route('home') }}" class="nav-link hf">Home</a></li>

                <li class="nav-item text-uppercase"><a href="{{ route('school.admission') }}"
                        class="nav-link hf">Admission</a></li>

                <li class="nav-item dropdown hf position-static">
                    <div class="nav-link text-uppercase dropdown-toggle text-decoration-none" id="academicsDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Academics</div>
                    <!-- Mega Menu -->
                    <div class="dropdown-menu w-100 border-0 fs-5 shadow-lg py-4" aria-labelledby="academicsDropdown">
                        <div class="container">
                            <div class="row">

                                <!-- Programs column -->
                                <div class="col-md-3">
                                    <h6 class="fw-bold text-primary fs-5">Programs</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item py-1" href="{{ route('academic.programs') }}">Our
                                                Courses</a></li>
                                    </ul>
                                </div>

                                <!-- Departments column -->
                                <div class="col-md-3">
                                    <h6 class="fw-bold text-primary fs-5">Departments</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item py-1" href="#">Health Sciences</a></li>
                                        <li><a class="dropdown-item py-1" href="#">ICT & Computer Studies</a></li>
                                        <li><a class="dropdown-item text-muted py-1" href="#">Technical
                                                Courses</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="fw-bold text-primary fs-5">Related Links</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item py-1"
                                                href="{{ asset('assets/Files/Calendar.pdf') }}" target="_blank"
                                                rel="noopener noreferrer">
                                                Academic Calendars
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item py-1"
                                                href="{{ asset('assets/Files/Fee Structures.pdf') }}" target="_blank"
                                                rel="noopener noreferrer">
                                                Fee Structures
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item hf dropdown">
                    <div class="nav-link text-uppercase dropdown-toggle text-decoration-none" id="academicsDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About US</div>
                    <ul class="dropdown-menu fs-5">
                        <li><a class="dropdown-item py-1" href="{{ route('about') }}">About SMTC</a></li>
                        <li><a class="dropdown-item py-1" href="{{ route('school.team') }}">Our Team</a></li>
                        <li class="dropdown-item p-0">
                            <button class="btn fs-5 btn-link dropdown-item text-start py-1 w-100" type="button"
                                data-bs-toggle="collapse" data-bs-target="#studentAffairsMenu">
                                Student Affairs
                            </button>

                            <ul class="list-unstyled fs-6 ps-3 collapse" id="studentAffairsMenu">
                                <li><a class="dropdown-item py-1" href="{{ route('school.dean') }}">Dean of
                                        Students</a></li>
                                <li><a class="dropdown-item py-1" href="{{ route('school.career') }}">Career Liason</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item py-1" href="{{ route('partials.contacts') }}">Contact Us</a></li>
                    </ul>
                </li>
                <li class="nav-item hf"><a href="{{ route('academic.faqs') }}" class="nav-link">FAQs</a></li>
            </ul>
        </div>

        <!-- Right side: Staff | Student -->
        <div class="nav-link text-right">
            <!-- <a href="{{ route('student.login') }}" class="text-decoration-none text-primary">Student</a>
            <span class="text-dark mx-2">|</span> -->
            <a href="{{ route('school.earn-referral') }}"
                class="text-decoration-none text-bold text-uppercase text-warning-emphasis">referral</a>
        </div>

    </header>
</div>
<script src="{{ asset('js/home.js') }}"></script>
