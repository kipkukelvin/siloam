<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="bg text-white fixed-top py-1 overflow-hidden" style="z-index:1100;">
    <div class="marquee-container">
        <div class="marquee-content"> Admissions Open for 2026 🎓 -- <a href="{{ route('academic.application') }}"
                class="btn btn-warning hf btn-sm rounded-pill mx-2"> Apply Now </a> -- Enroll Today -- Secure Your
            Future! 🚀 </div>
    </div>
</div>

<div id="mainNavbar" class="container-fluid shadow-sm fixed-top hf bg-white" style="top:8px; z-index:1000;">

    <div style="margin-top:30px;"></div>

    <nav class="navbar navbar-expand-lg">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center text-decoration-none me-4" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/WEB.png') }}" class="img-fluid me-2" style="height: 55px;">
        </a>

        <!-- 🔥 Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- 🔥 COLLAPSE START -->
        <div class="collapse navbar-collapse" id="mainMenu">

            <!-- LEFT SIDE -->
            <div class="d-lg-flex align-items-center w-100 justify-content-between">

                <!-- Nav -->
                <ul class="nav nav-pills hf text-uppercase">

                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link hf">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('school.admission') }}" class="nav-link hf">Admission</a>
                    </li>

                    <!-- MEGA MENU -->
                    <li class="nav-item dropdown hf position-static">
                        <div class="nav-link text-uppercase dropdown-toggle text-decoration-none" id="academicsDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Academics</div>

                        <!-- MEGA MENU -->
                        <div class="dropdown-menu w-100 border-0 fs-5 text-capitalize shadow-lg py-4">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">
                                        <h6 class="fw-bold text-primary fs-5">Programs</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item py-1" href="{{ route('academic.programs') }}">
                                                    Our Courses
                                                </a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <h6 class="fw-bold text-primary fs-5">Departments</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item py-1" href="#">Health Sciences</a></li>
                                            <li><a class="dropdown-item py-1" href="#">ICT & Computer Studies</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-3">
                                        <h6 class="fw-bold text-primary fs-5">Related Links</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item py-1"
                                                    href="{{ asset('assets/Files/Calendar.pdf') }}"
                                                    target="_blank">Academic Calendars</a></li>

                                            <li><a class="dropdown-item py-1"
                                                    href="{{ asset('assets/Files/Fee Structures.pdf') }}"
                                                    target="_blank">Fee Structures</a></li>

                                            <li><a class="dropdown-item py-1"
                                                    href="{{ route('pastpapers.exampastpapers') }}">
                                                    Exam Past Papers
                                                </a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- ABOUT US -->
                    <li class="nav-item dropdown hf">
                        <div class="nav-link dropdown-toggle text-uppercase text-decoration-none" role="button"
                            data-bs-toggle="dropdown">
                            About Us
                        </div>

                        <ul class="dropdown-menu text-capitalize fs-5">

                            <li>
                                <a class="dropdown-item py-1" href="{{ route('about') }}">
                                    About SMTC
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item py-1" href="{{ route('school.team') }}">
                                    Our Team
                                </a>
                            </li>

                            <!-- ✅ RESTORED Student Affairs -->
                            <li class="dropdown-item p-0">

                                <button class="btn btn-link dropdown-item text-start w-100 py-1 fs-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#studentAffairsMenu">
                                    Student Affairs
                                </button>

                                <ul class="list-unstyled ps-3 collapse fs-6 text-capitalize" id="studentAffairsMenu">
                                    <li>
                                        <a class="dropdown-item py-1" href="{{ route('school.dean') }}">
                                            Dean of Students
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item py-1" href="{{ route('school.career') }}">
                                            Career Liaison
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <li>
                                <a class="dropdown-item py-1" href="{{ route('partials.contacts') }}">
                                    Contact Us
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{ route('academic.faqs') }}" class="nav-link">FAQs</a>
                    </li>

                </ul>

                <!-- RIGHT SIDE -->
                <div class="mt-3 mt-lg-0">
                    <a href="{{ route('school.earn-referral') }}"
                        class="text-uppercase text-warning-emphasis text-decoration-none fw-bold">
                        Referral
                    </a>
                </div>

            </div>
        </div>
        <!-- 🔥 COLLAPSE END -->

    </nav>
</div>
<script src="{{ asset('js/home.js') }}"></script>