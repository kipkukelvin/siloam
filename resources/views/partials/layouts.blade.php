<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Siloam Medical & Technical College" />
    <meta name="generator" content="Astro v5.13.2" />

    <title>@yield('title', 'Page Title')</title>
    <link rel="icon" href="{{ asset('assets/images/ICON.png') }}" type="image/png" ?v=5>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <meta name="theme-color" content="#712cf9" />
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
<style> body { padding-top: 60px; /* space for fixed navbar */ } </style>
<div class="whatsapp-wrapper">

    <!-- Chat Popup -->
    <div class="whatsapp-popup" id="whatsappPopup">
        <div class="popup-header">
            Chat with us
            <span onclick="toggleWhatsApp()" class="close-btn">&times;</span>
        </div>

        <div class="popup-body">
            <p>Hello 👋</p>
            <p>Welcome to Siloam College. How can we help you?</p>

            <div class="text-center"><a href="https://wa.me/254701444333?text=Hello%20Siloam%20College,%20I%20would%20like%20more%20information."
               target="_blank"
               class="chat-btn px-3 py-2 w-auto d-inline-block rounded-pill fs-5">
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
