 <title>@yield('title', 'Page Title')</title>
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
 <nav class="navbar navbar-expand-lg bg-white shadow-sm py-2">
     <div class="container">
        <div class="d-flex align-items-center">

         <!-- Logo -->
         <a class="navbar-brand me-3" href="{{ route('pastpapers.exampastpapers') }}">
             <img src="{{ asset('assets/images/LIBRARY.jpg') }}" style="height:55px;" alt="Logo">
         </a>

         <!-- Navbar toggler for mobile -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Navbar links -->
         <div class="collapse navbar-collapse" id="mainNavbar">

             <ul class="navbar-nav mx-auto d-flex flex-wrap text-center">

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-black" href="#">Perioperative</a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('pastpapers.exam', ['department' => 'Perioperative', 'year' => 2025]) }}">2025 Exam Papers</a></li>
                         <li><a class="dropdown-item" href="#">2026 Exam Papers</a></li>
                     </ul>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-black" href="#">Orthopedics</a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('pastpapers.exam', ['department' => 'Orthopedic', 'year' => 2025]) }}">2025 Exam Papers</a></li>
                         <li><a class="dropdown-item" href="#">2026 Exam Papers</a></li>
                     </ul>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-black" href="#">CNA</a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('pastpapers.exam', ['department' => 'CNA', 'year' => 2025]) }}">2025 Exam Papers</a></li>
                         <li><a class="dropdown-item" href="#">2026 Exam Papers</a></li>
                     </ul>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-black" href="#">Nursing</a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('pastpapers.exam', ['department' => 'Nursing', 'year' => 2025]) }}">2025 Exam Papers</a></li>
                         <li><a class="dropdown-item" href="#">2026 Exam Papers</a></li>
                     </ul>
                 </li>

             </ul>

         </div>
        </div>
     </div>
 </nav>

