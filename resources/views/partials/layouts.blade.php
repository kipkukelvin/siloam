<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Siloam Medical & Technical College" />
    <meta name="generator" content="Astro v5.13.2" />

    <title>@yield('title', 'Page Title')</title>
  <link rel="icon" href="{{ asset('assets/images/ICON.jpg') }}?v=5" type="image/png">
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
<style> body { padding-top: 80px; /* space for fixed navbar */ } </style>
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

<!-- Accessibility Floating Button -->
<button id="a11yToggle" class="a11y-toggle" aria-label="Accessibility Menu">
    ♿
</button>

<!-- Accessibility Panel -->
<div id="a11yPanel" class="a11y-panel">

    <h6 class="fw-bold mb-3">Accessibility</h6>

    <!-- Font Size -->
    <div class="mb-3">
        <label class="form-label small">Text Size</label>
        <div class="d-flex gap-2">
            <button class="btn btn-sm btn-outline-primary w-50"
                onclick="changeFont(1.1)">A+</button>
            <button class="btn btn-sm btn-outline-primary w-50"
                onclick="changeFont(0.9)">A-</button>
        </div>
    </div>

    <!-- Dark Mode -->
    <div class="mb-3">
        <button class="btn btn-sm btn-dark w-100"
            onclick="toggleDarkMode()">
            🌙 Dark Mode
        </button>
    </div>

    <!-- High Contrast -->
    <div class="mb-3">
        <button class="btn btn-sm btn-warning w-100"
            onclick="toggleContrast()">
            🎨 High Contrast
        </button>
    </div>

    <!-- Language -->
    <div>
        <select class="form-select form-select-sm"
            onchange="changeLanguage(this.value)">
            <option value="en">English</option>
            <option value="sw">Kiswahili</option>
        </select>
    </div>

</div>
</body>
</html>
