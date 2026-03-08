 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
 <div class="text-monospace pt-3 font fade-up">
     <h1 class=" text-center text-black mt-4 text-uppercase mb-2">
         About SMTC
     </h1>
     <span style="display:block; width:80px; height:2px; background:red; margin:5px auto 0;"></span>
     <h4 class="text-secondary text-center fst-italic mb-4 mt-4">
         Shaping Minds, Transforming Lives.
     </h4>
     <div class="container my-5 p-0">
         <div class="card border-0 p-4 text-start">
             <h2 class="text-warning-emphasis text-start ps-4">Our History</h2>
             <p class="fs-6 dropcap">Founded in 2024 in Kericho, Siloam Medical & Technical College was established with the
                 vision of nurturing individuals who are passionate about nursing and healthcare. The institution was
                 created in response to the growing demand for skilled healthcare professionals in Kenya and beyond.

                 The college was founded by the proprietors of Siloam Hospital Ltd, experienced healthcare entrepreneurs
                 committed to strengthening healthcare services through quality education and training. Built on
                 extensive experience in the healthcare sector, the institution seeks to provide transformative
                 education in nursing and health sciences.

                 Since its establishment, the college has remained committed to equipping students with the knowledge,
                 practical skills, and professional values necessary to deliver safe, compassionate, and high-quality
                 healthcare.</p>
         </div>
     </div>
 </div>
 <div class="container font  my-4 pt-3">
     <div class="row g-4">

         <!-- Vision -->
         <div class="col-md-6 text-center">
             <div class="card border-darkslate fade-up">
                 <h5 class="mt-3 fs-2">Vision</h5>
                 <div class="card-body">
                     <p class="fs-6 mb-2">
                         To prepare world-class healthcare professionals committed to transforming healthcare locally
                         and everywhere.
                     </p>
                 </div>
             </div>
         </div>

         <!-- Mission -->
         <div class="col-md-6 text-center text-red">
             <div class="card h-100 border-darkslate fade-up">
                 <h5 class="mt-3 fs-2">Mission</h5>
                 <div class="card-body ">
                     <p class="fs-6 mb-2 text-start me-3">
                         To empower students with innovative healthcare education that develops expertise, compassion,
                         and leadership, preparing them to excel in their professionals and improve lives everywhere.
                     </p>
                 </div>
             </div>
         </div>

         <!-- Core Values -->
         <div class="row justify-content-center mt-5">
             <div class="col-md-8">
                 <div class="card h-100 border-light bg text-white fade-up">
                     <h5 class="mt-4 fs-2 text-center">Core Values</h5>
                     <div class="card-body text-start ps-4">
                         <ol class="">
                             <li><strong>Excellence</strong> - Striving for the highest standards in education,
                                 practice, and patient care.</li>
                             <li><strong>Compassion</strong> - Fostering empathy, kindness, and patient-centered care.
                             </li>
                             <li><strong>Integrity</strong> - Upholding honesty, ethics, and professionalism in all
                                 actions.</li>
                             <li><strong>Innovation</strong> - Encouraging creativity and the adoption of new medical
                                 advancements.</li>
                             <li><strong>Collaboration</strong> - Promoting teamwork and partnerships for improved
                                 healthcare outcomes.</li>
                             <li><strong>Lifelong Learning</strong> - Committing to continuous education and
                                 professional development.</li>
                             <li><strong>Service to Humanity</strong> - Dedicated to improving lives through quality
                                 healthcare education and practice.</li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <script>
     document.addEventListener("DOMContentLoaded", () => {
         const observer = new IntersectionObserver((entries, obs) => {
             entries.forEach(entry => {
                 if (entry.isIntersecting) {
                     entry.target.classList.add("show");
                     obs.unobserve(entry.target); // animate once
                 }
             });
         }, {
             threshold: 0.25
         });

         document.querySelectorAll(".fade-up").forEach(el => {
             observer.observe(el);
         });
     });
 </script>
