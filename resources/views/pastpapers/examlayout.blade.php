<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Siloam Medical & Technical College" />
    <meta name="generator" content="Astro v5.13.2" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/css/lightbox.min.css" rel="stylesheet">
    <title>@yield('title', 'Page Title')</title>
    <link rel="icon" href="{{ asset('assets/images/ICON2.png') }}?v=5" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <meta name="theme-color" content="#712cf9" />
</head>

<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('pastpapers.ex')

    {{-- Page content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}

    <footer class="bg py-1 mt-auto">
        <div class="container">
            <hr class="border-light w-100">
            <div class="row g-2">
                <div class="col-md-7">
                    <div class="text-start text-white me-2 fs-6">
                        <p class="mb-1 hf">Siloam Medical & Technical College &copy; {{ date('Y') }}. All Rights
                            Reserved</p>
                    </div>
                </div>
                <div class="col-md-5 text-start mb-1">
                    <a href="https://www.facebook.com/profile.php?id=61581782424060" target="_blank"
                        rel="noopener noreferrer" class="social-icon me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/@siloamcollege" target="_blank" rel="noopener noreferrer"
                        class="social-icon me-3"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="social-icon me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon me-3"><i class="fab fa-instagram"></i></a>
                </div>

            </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="whatsapp-wrapper">

        <!-- Chat -->
        <div class="whatsapp-popup" id="whatsappPopup">
            <div class="popup-header">
                Chat with us
                <span onclick="toggleWhatsApp()" class="close-btn">&times;</span>
            </div>

            <div class="popup-body">
                <p>Hello 👋</p>
                <p>Welcome to Siloam College. How can we help you?</p>

                <div class="text-center"><a
                        href="https://wa.me/254701444333?text=Hello%20Siloam%20College,%20I%20would%20like%20more%20information."
                        target="_blank" class="chat-btn px-4 py-3 w-auto text-left d-inline-block rounded-pill fs-5">
                        Start Chat<i class="fa fa-paper-plane ms-2"></i>
                    </a></div>
            </div>
        </div>

        <!-- Floating Button -->
        <div class="whatsapp-button" onclick="toggleWhatsApp()">
            <i class="fab fa-whatsapp"></i>
        </div>

    </div>

</body>

</html>
