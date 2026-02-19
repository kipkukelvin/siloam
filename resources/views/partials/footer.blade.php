 <footer class="bg text-white text-center py-4 mt-auto">
    <div class="container">
    <div class="row">
      <!-- College Info -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase text-start mb-3 me-2 ms-5">Siloam MTC</h5>
        <p class="text-start text-white fs-6">
          The objective of Siloam Medical & Technical College is to shape minds and change lives by providing quality education, fostering personal growth, and preparing students for success in both their careers and communities.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase mb-3 me-2 ms-3 text-start">Quick Links</h5>
        <ul class="list-unstyled text-start me-2 ms-5 text-white">
          <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
          <li><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="{{route('academic.faqs')}}" class="text-white text-decoration-none">FAQS</a></li>
          <li><a href="https://mail.google.com/mail/u/0/?fs=1&amp;tf=cm&amp;source=mailto&amp;to=info.siloamcollegeofhscs@gmail.com" target="_blank" rel="noreferrer noopener" class="text-white text-decoration-none">Email Us</a></li>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 mb-4">
        <h5 class="text-uppercase text-start me-2 ms-5 mb-3">Contact Us</h5>
        <ul class="list-unstyled text-start text-white">
          <li><i class="fa fa-location-dot me-2"></i> Matobo former Milimani Schools, Kericho, Kenya</li>
          <li><i class="fa fa-phone me-2"></i> +254 701 444 333</li>
          <li><i class="fa fa-envelope me-2"></i> info.siloamcollegeofhscs@gmail.com</li>
        </ul>
      </div>
    </div>
        <!-- Social Media -->
        <div class="text-center mt-3">
          <a href="https://www.facebook.com/profile.php?id=61581782424060" target="_blank" rel="noopener noreferrer" class="social-icon me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.tiktok.com/@siloamcollege" target="_blank" rel="noopener norreferrer" class="social-icon me-3"><i class="fab fa-tiktok"></i></a>
          <a href="#" class="social-icon me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon me-3"><i class="fab fa-linkedin"></i></a>
        </div>
    <hr class="border-light">
    <div class="text-center text-white me-2 ms-5 fs-6">
      <p class="mb-2">Siloam Medical & Technical College &copy; {{ date('Y') }}. All Rights Reserved</p>
    </div>
  </div>
</footer>