@extends('partials.layouts')
@section('title', 'Gallery - Siloam Medical & Technical College')

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <section class="py-5 mt-3 bg-light">
        <div class="container">

            <h1 class="text-center hf fw-bold mb-4">Media Library</h1>
            <p class="text-center hf fs-5 text-muted mb-5">
                Explore moments from our campus life, training sessions, and events.
            </p>

            <div class="row g-4">

                <!-- Image -->
                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Siloam.jpeg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Siloam.jpeg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Siloam College</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Library.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Library.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Library</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Skillslab.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Skillslab.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Skills Lab</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Students.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Students.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Students</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Welcome.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Welcome.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Welcome</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Classroom.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Classroom.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Classroom</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/images/soccer.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/images/soccer.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Sports</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-2">
                    <div class="gallery-item position-relative overflow-hidden shadow-sm">
                        <a href="{{ asset('assets/Gallery/Lectureroom.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Lectureroom.jpg') }}" class="img-fluid w-100" loading="lazy">
                            <div class="gallery-caption">
                                <span class="fw-bold">Lecture Room</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
