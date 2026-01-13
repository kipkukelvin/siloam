@extends('partials.layouts')

@section('title', 'Contact Us')
<link rel="shortcut icon" type="image/png/jpg" href="{{ asset('assets/images/logo.png') }}?v=5">
<div class="container-fluid bg-info text-light py-2">
    <h2 class="text-center fw-bold m-0">
        Contacts
    </h2>
</div>
@section('content')
    <div class="container py-3">
        <div class="text-center mb-5">
            <p class="lead">We are here to answer your questions and provide support. Reach out to us using the form below
                or through our contact details.</p>
        </div>
        <!-- Contact Info -->
        <div class="table-responsive">
            <table class="table table-borderless text-center" style="table-layout: fixed; width: 100%;">

                <th class="bg-info">Contacts</th>
                <tr>
                    <th>Main Office</th>
                    <th>Academics</th>
                    <th>Social Links</th>
                </tr>
                </th>
                <tbody>
                    <tr>
                        <td>
                            <p><i class="fas fa-map-marker-alt me-2"></i><strong>Address:</strong> 2181-20200 Matobo,
                                Kericho, Kenya</p>
                            <p><i class="fas fa-phone me-2"></i><strong>Phone:</strong> +254 701 444 333</p>
                            <p><i class="fas fa-envelope me-2"></i><strong>Email:</strong>
                                info.siloamhospitalcollegeofhscs@gmail.com</p>
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
