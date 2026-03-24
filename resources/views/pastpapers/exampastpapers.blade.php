@extends('pastpapers.examlayout')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@section('title', 'Exam Past Papers')
@section('content')
    <div class="container">
        <div class="row text-center mt-4 mb-5">

            <h1 class="text-center fw-bold mb-4 hf">📚 Exam Past Papers</h1>

            <!-- Parent column -->
            <div class="col-12 bg-secondary p-4 shadow-sm">

                <div class="row g-4">

                    <!-- Column 1 -->
                    <div class="col-md-6">
                        <div class="p-4 bg-white shadow-sm h-100">
                            <h2 class="fw-bold text-success hf">% Success in Your Revision</h2>
                            <p class="text-muted">
                                Access past exams for all courses and improve your performance with real exam questions.
                            </p>
                            <a href="#" class="btn btn-success btn-sm">Browse Papers</a>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-6">
                        <div class="p-4 bg-white text-center shadow-sm h-100">
                            <h2 class="fw-bold text-danger hf">⚠️ Missing an Exam?</h2>
                            <p class="text-muted">
                                Report any missing past papers.
                            </p>
                            <p class="text-small">Click the link below.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeBvclZTRoOWGb5krIg_XFuGXCvoKOTdZViwQrH897i8v0CDQ/viewform?usp=sharing&ouid=109079632479061500787"
                                target="_blank" rel="noopener noreferrer" class="btn btn-danger btn-sm">
                                Report Here
                            </a>
                            <p>
                                You can chat with us or call using the whatsapp contact at the bottom left corner of this
                                window or send an email to info.siloamlibrary@gmail.com
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div style="display:flex; align-items:center; justify-content:center; gap:180px;" class="mt-5 mb-4">

                <span style="flex:1; height:6px; background:#333091;"></span>

                <h1 class="text-center fw-bold m-0 hf text-warning-emphasis">Departments</h1>

                <span style="flex:1; height:6px; background:#333091;"></span>

            </div>

            <div class="col-12">

                <div class="row g-4">

                    <div class="col-12 col-md-4">
                        <div class="bg-white h-100">
                            <h5 class="fw-bold ms-4">Department of Orthopedic & Trauma Medicine</h5>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="bg-white h-100">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a
                                        href="{{ route('pastpapers.exam', ['department' => 'Orthopedic', 'year' => 2025]) }}" class="text-decoration-none">
                                        2025 Exam Past Papers
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a
                                        href="{{ route('pastpapers.exam', ['department' => 'Orthopedic', 'year' => 2026]) }}" class="text-decoration-none">
                                        2026 Exam Past Papers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="border-success w-100">

                    <div class="col-12 col-md-4">
                        <div class="bg-white h-100">
                            <h5 class="fw-bold ms-4">Department of Perioperative Theatre Technology</h5>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="bg-white h-100">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a
                                        href="{{ route('pastpapers.exam', ['department' => 'Perioperative', 'year' => 2025]) }}" class="text-decoration-none">
                                        2025 Exam Past Papers
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a
                                        href="{{ route('pastpapers.exam', ['department' => 'Perioperative', 'year' => 2026]) }}" class="text-decoration-none">
                                        2026 Exam Past Papers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="border-success w-100">

                    <div class="col-12 col-md-4">
                        <div class="bg-white h-100">
                            <h5 class="fw-bold ms-4">Department of Nursing(KRCHN)</h5>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="bg-white h-100">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="{{ route('pastpapers.exam', ['department' => 'Nursing', 'year' => 2025]) }}" class="text-decoration-none">
                                        2025 Exam Past Papers
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('pastpapers.exam', ['department' => 'Nursing', 'year' => 2026]) }}" class="text-decoration-none">
                                        2026 Exam Past Papers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr class="border-success w-100">

                    <div class="col-12 col-md-4">
                        <div class="bg-white h-100">
                            <h5 class="fw-bold ms-4">Department of Certified Nursing Assistant</h5>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="bg-white h-100">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="{{ route('pastpapers.exam', ['department' => 'CNA', 'year' => 2025]) }}" class="text-decoration-none">
                                        2025 Exam Past Papers
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="{{ route('pastpapers.exam', ['department' => 'CNA', 'year' => 2026]) }}" class="text-decoration-none">
                                        2026 Exam Past Papers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
