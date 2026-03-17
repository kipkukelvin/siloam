@extends('partials.layouts')
@section('title', 'Gallery - Siloam Medical & Technical College')

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <section class="py-5 bg-light">
        <div class="container">

            <h1 class="text-center hf fw-bold mb-4">Media Library</h1>
            <p class="text-center hf fs-5 text-muted mb-5">
                Explore moments from our campus life, training sessions, and events.
            </p>

            <div class="row g-4">

                <!-- Image -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/Gallery/Siloam.jpeg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Siloam.jpeg') }}" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/Gallery/Library.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Library.jpg') }}" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/Gallery/Skillslab.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Skillslab.jpg') }}" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/Gallery/Students.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Students.jpg') }}" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/Gallery/Welcome.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Welcome.jpg') }}" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/Gallery/Classroom.jpg') }}" data-lightbox="gallery">
                            <img src="{{ asset('assets/Gallery/Classroom.jpg') }}" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
