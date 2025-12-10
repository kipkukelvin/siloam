@extends('partials.layouts')
@section('title', 'SMTC-TC | Shaping Minds, Changing Lives')
 <link rel="icon" type="image/png" href="{{ asset('assets/images/LOGO.jpg') }}">
    <!-- Begin page content -->
  <div class="container-fluid mt-4 img-fluid fixed w-100 h-100 pt-2">
    @include('welcome')
</div>
<div class="text-monospace pt-3 fw-bold fs-4">
     <h1 class=" text-center text-primary mb-2">
            About Us
        </h1>
        <span style="display:block; width:60px; height:2px; background:#0199ff;; margin:5px auto 0;"></span>
        <h4 class="text-secondary text-center fst-italic mb-4 mt-4">
            Shaping Minds, Transforming Lives
        </h4>
        <p class="lead text-muted mx-auto" style="max-width: 750px;">
            At Siloam Medical, Technical & Commercial Training College, we focus on empowering students 
            through practical learning, industry-aligned programs, and a supportive academic environment. 
            Our goal is to develop skilled professionals ready to thrive in today’s evolving world.
        </p>
    </div>  
<section id="academic-section">
@include('academic.academic')
</section>
@include('contact')
@include('partials.gallery')
    <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
