@extends('partials.layouts')

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@section('title', 'Contact Us')
@section('content')
    <div class="container-fluid bg text-light mt-2 py-3">
        <h1 class="text-center hf fw-bold m-0">
            Contacts
        </h1>
    </div>
    <h2 class="text-center text-uppercase text-dark hf mt-5">Get in Touch</h2>
    <span style="display:block; width:350px; height:2px; background:#200680; margin:5px auto 0;"></span>

    <div class="container py-3 mt-2 font">
        <div class="text-center mb-5">
            <p class="hf fs-5">We are here to answer your questions and provide support. Reach out to us using the form below
                or through our contact details.</p>
        </div>
        <!-- Contact Info -->
        <div class="table-responsive">
            <table class="table table-borderless text-center" style="table-layout: fixed; width: 100%;">

                <th class="bg-warning hf fs-5 text-white">Contacts</th>
                <tr class="fw-bold hf fs-5 fst-italic">
                    <th>Main Office</th>
                    <th>Academics</th>
                    <th>Social Links</th>
                </tr>
                </th>
                <tbody>
                    <tr>
                        <td>
                            <p><i class="fas fa-map-marker-alt me-2 mb-2"></i><strong>Address:</strong> <br>2181-20200
                                Matobo,
                                Kericho, Kenya</p>
                            <p><i class="fas fa-phone me-2 mb-2"></i><strong>Phone:</strong> <br>+254 701 444 333</p>
                            <p><i class="fas fa-envelope me-2 mb-2"></i><strong>Email:</strong><br>
                                info.siloamcollegeofhscs@gmail.com</p>
                        </td>
                        <td>
                            <p></i><strong>Admissions</strong></p>
                            <p><i class="fas fa-envelope me-2 mb-2"></i><strong>Email</strong><br>
                                info.siloamcollegeofhscs@gmail.com</p>
                            <p><i class="fas fa-phone me-2 mb-2"></i><strong>Phone:</strong> <br>+254 701 444 333</p>
                        </td>
                        <td>
                            <ul class="list-unstyled text-primary">
                                <li><i class="fab fa-facebook me-2 mb-2"></i><a
                                        href="https://www.facebook.com/profile.php?id=61581782424060" target="_blank"
                                        rel="noopener noreferrer">Facebook</a></li>
                                <li><i class="fab fa-tiktok me-2 mb-2"></i><a href="https://www.tiktok.com/@siloamcollege25"
                                        target="_blank" rel="noopener noreferrer">TikTok</a></li>
                                <li><i class="fab fa-instagram me-2 mb-2"></i><a href="#">Instagram</a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('contact')
        <!-- Map-->
        <div class="container my-4">
            <div class="ratio ratio-16x9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7395670925293!2d35.267425074075575!3d-0.35999463531334064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182a59aa077e836f%3A0x687cd92ce0097c87!2sMILIMANI%20SCHOOLOOL%20PRIMARY!5e0!3m2!1sen!2ske!4v1773652859285!5m2!1sen!2ske"
                    style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
