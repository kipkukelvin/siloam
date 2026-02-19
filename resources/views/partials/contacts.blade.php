@extends('partials.layouts')

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@section('title', 'Contact Us')
@section('content')
<div class="container-fluid bg text-light mt-2 y-2">
    <h2 class="text-center fw-bold m-0">
        Contacts
    </h2>
</div>
<h2 class="text-center text-uppercase text-primary mt-4">Get in Touch</h2>
<span style="display:block; width:150px; height:2px; background:#fa0000; margin:5px auto 0;"></span>

    <div class="container py-3 font">
        <div class="text-center mb-5">
            <p class="lead">We are here to answer your questions and provide support. Reach out to us using the form below
                or through our contact details.</p>
        </div>
        <!-- Contact Info -->
        <div class="table-responsive">
            <table class="table table-borderless text-center" style="table-layout: fixed; width: 100%;">

                <th class="bg-success">Contacts</th>
                <tr>
                    <th>Main Office</th>
                    <th>Academics</th>
                    <th>Social Links</th>
                </tr>
                </th>
                <tbody>
                    <tr>
                        <td>
                            <p><i class="fas fa-map-marker-alt me-2"></i><strong>Address:</strong> <br>2181-20200 Matobo,
                                Kericho, Kenya</p>
                            <p><i class="fas fa-phone me-2"></i><strong>Phone:</strong> <br>+254 701 444 333</p>
                            <p><i class="fas fa-envelope me-2"></i><strong>Email:</strong><br>
                                info.siloamcollegeofhscs@gmail.com</p>
                        </td>
                        <td>
                            <p><strong>Registrar</strong></p>
                            <p><i class="fas fa-envelope me-2"></i><strong>Email</strong></p>
                            <p></i><strong>Admission</strong></p>
                            <p><i class="fas fa-envelope me-2"></i><strong>Email</strong></p>
                        </td>
                        <td>
                            <ul class="list-unstyled text-primary">
                                <li><i class="fab fa-facebook me-2"></i><a
                                        href="https://www.facebook.com/profile.php?id=61581782424060" target="_blank"
                                        rel="noopener noreferrer">Facebook</a></li>
                                <li><i class="fab fa-tiktok me-2"></i><a href="https://www.tiktok.com/@siloamcollege25"
                                        target="_blank" rel="noopener noreferrer">TikTok</a></li>
                                <li><i class="fab fa-instagram me-2"></i><a href="#">Instagram</a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('contact')
        <!-- Optional Map Placeholder
                <div class="mt-4">
                    <iframe src="https://maps.google.com/maps?q=Nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                        height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>-->
    </div>
    </div>
    </div>
@endsection
