@extends('partials.layouts')
@section('title','Certified-Nursing-Assistant')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <div class="position-relative">
    <img src="{{ asset('assets/images/cna.jpg') }}"
         class="img-fluid w-100"
         style="height:350px; object-fit:cover;"
         alt="" loading="lazy">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark"
     style="opacity: 0.75;"></div>
<div class="position-absolute top-25 bottom-0 start-0 ps-5 translate-middle-y text-white">
    <h1 class="hero-title fw-bold text-center fst-italic text-uppercase">Certified <br> Nursing <br> Assistant</h1>
</div>

</div>

<div class="container card-body my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-0 border-warning bg-light h-100 p-4 border-top border-4">
        <h4 class="fw-bold mb-3">Overview</h4>
        <p class="fs-6">
          The Certified Nursing Assistant (CNA) program at Siloam Medical & Technical College prepares students to provide compassionate and competent care to patients in hospitals, clinics, and long-term care facilities. The course covers fundamental nursing skills, patient hygiene, vital signs monitoring, basic medical procedures, infection control, and effective communication with patients and healthcare teams.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container my-4 pt-3">
  <div class="row g-4">

    <!-- Column 1: Accreditation Body -->
    <div class="col-md-5 mx-auto">
      <div class="card border-light card-1 h-100 card-hover">
        <!-- Header -->
        <div class="card-header bg text-white">
          <h5 class="mb-0"><i class="fa fa-award me-2"></i>Accreditation Body</h5>
        </div>
        <!-- Content -->
        <div class="card-body">
          <p class="fw-bold fs-4 mb-2">TVET Accredited</p>
          <p class="fs-5 fw-bold"><i class="fa fa-graduation-cap me-2 text-warning-emphasis"></i>Examining Body</p>
          <ul class="list-unstyled fs-6 mb-0">
            <li>TVET-CDAAC</li>
          </ul> 
        </div>
      </div>
    </div>
    <!-- Column 3: Certificate -->
    <div class="col-md-5 mx-auto">
      <div class="card border-light card-1 h-100 card-hover">
        <!-- Header -->
        <div class="card-header bg text-white">
          <h5 class="mb-0"><i class="fa fa-certificate me-2 text-white"></i>Certificate</h5>
        </div>
        <!-- Content -->
        <div class="card-body">
           <p class="fw-bold fs-5"><i class="fa fa-user-graduate me-2 text-warning-emphasis"></i>Entry Requiremets</p>
          <ul class="list-unstyled fs-6 mb-0">
            <li>KCSE Mean Grade D (Plain) or equivalent</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- Choose Us -->
<div class="container card-body my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-light bg-light h-100 p-4 border-top-3">
        <h4 class="fw-bold mb-3">Why Choose Us!
            <span class="d-block mt-1" style="height:3px; width:50px; background-color:#d6b10b;"></span>
            </h4>
    <div class="row">
    <!-- Column 1 -->
    <div class="col-md-6">
      <ul class="list-unstyled fs-6">
        <li class="mb-3">
          <i class="fa fa-hospital me-2 text-warning-emphasis"></i>
          <strong>Guaranteed Hospital Placement</strong>
          <p class="mb-0 small text-muted">We ensure all students get practical experience in real hospital settings.</p>
        </li>
        <li class="mb-3">
          <i class="fa fa-credit-card me-2 text-warning-emphasis"></i>
          <strong>Flexible Payment Plans</strong>
          <p class="mb-0 small text-muted ms-4">Affordable options tailored to make your education stress-free.</p>
        </li>
        <li class="mb-3">
          <i class="fa fa-desktop me-2 text-warning-emphasis"></i>
          <strong>Digital Literacy Skills</strong>
          <p class="mb-0 small text-muted ms-4">Essential skills for mordern workplaces.</p>
        </li>
      </ul>
    </div>

    <!-- Column 2 -->
    <div class="col-md-6">
      <ul class="list-unstyled fs-6">
        <li class="mb-3">
          <i class="fa fa-book me-2 text-warning-emphasis"></i>
          <strong>Relevant Learning</strong>
          <p class="mb-0 small text-muted ms-4">Course content is up-to-date and aligned with industry needs.</p>
        </li>
        <li class="mb-3">
          <i class="fa fa-user-graduate me-2 text-warning-emphasis"></i>
          <strong>Learn from Experts</strong>
          <p class="mb-0 small text-muted ms-4">Experienced instructors guide you through practical and theoretical knowledge.</p>
        </li> 
                                            <li class="mb-3">
                                        <i class="fa fa-certificate me-2 text-warning-emphasis"></i>
                                        <strong>Free Computer Certificate</strong>
                                        <p class="mb-0 small text-muted ms-4">
                                            All students receive complimentary computer training with certification.
                                        </p>
                                    </li>
      </ul>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>
<!-- Full-width column -->
<div class="container card-body my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-0 border-bottom border-4 border-warning bg-light h-100 p-4">
        <h4 class="fw-bold mb-3">Enroll Now</h4>
        <p class="fs-6">
          Interested candidates can apply online or visit the admissions office for more details.
          Please ensure that all required documents are ready before submission.
        </p>
        <div class="text-center">
        <a href="{{ route('academic.application') }}" class="btn btn-outline-success mt-3 px-4 fs-5"><i class="fa fa-paper-plane me-2"></i>Apply Now</a>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection