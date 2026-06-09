 @extends('layouts.app')
 @section('content')
     <style>
         .text-pink {
             color: #f64d86;
         }

         .about-icon {
             font-size: 60px;
             color: #f64d86;
         }

         .about-card {
             transition: 0.4s;
             border-radius: 20px;
         }

         .about-card:hover {
             transform: translateY(-10px);
             box-shadow: 0 15px 35px rgba(246, 77, 134, .25) !important;
         }

         .about-image img {
             max-height: 500px;
             object-fit: cover;
         }
     </style>



     <section id="about-us" class="py-5 bg-light">

         <div class="container">

             <!-- Section Heading -->
             <div class="text-center mb-5">
                 <span class="badge px-3 py-2" style="background:#f64d86;">
                     About Mother Care Hospital
                 </span>

                 <h2 class="fw-bold mt-3">
                     Caring for Mothers & Babies Since 2005
                 </h2>

                 <p class="text-muted mx-auto" style="max-width:700px;">
                     At Mother Care Hospital, we are dedicated to providing exceptional
                     maternity care, pregnancy guidance, and women's healthcare services.
                     Our experienced specialists support every mother throughout her
                     pregnancy journey with compassion and expertise.
                 </p>
             </div>

             <!-- About Content -->
             <div class="row align-items-center">

                 <!-- Left Side -->
                 <div class="col-lg-6">

                     <div class="about-content">

                         <h3 class="fw-bold mb-3">
                             Our Story & Commitment
                         </h3>

                         <p class="text-muted">
                             Founded in 2005, Mother Care Hospital has become a trusted
                             destination for maternity and women's healthcare. Our mission
                             is to ensure a safe, healthy, and joyful pregnancy journey
                             through advanced medical care and personalized support.
                         </p>

                         <p class="text-muted">
                             With a team of highly qualified gynecologists, obstetricians,
                             pediatricians, and healthcare professionals, we provide
                             comprehensive care from prenatal consultations to postnatal
                             recovery.
                         </p>

                         <div class="row mt-4">

                             <div class="col-6">
                                 <h2 class="fw-bold text-pink">20+</h2>
                                 <p>Years Experience</p>
                             </div>

                             <div class="col-6">
                                 <h2 class="fw-bold text-pink">15k+</h2>
                                 <p>Healthy Deliveries</p>
                             </div>

                             <div class="col-6">
                                 <h2 class="fw-bold text-pink">50+</h2>
                                 <p>Medical Experts</p>
                             </div>

                             <div class="col-6">
                                 <h2 class="fw-bold text-pink">24/7</h2>
                                 <p>Emergency Care</p>
                             </div>

                         </div>

                     </div>

                 </div>

                 <!-- Right Side -->
                 <div class="col-lg-6">

                     <div class="about-image text-center">

                         <img src="images/about-mothercare.jpg" class="img-fluid rounded-4 shadow"
                             alt="Mother Care Hospital">

                     </div>

                 </div>

             </div>

             <!-- Features -->
             <div class="row mt-5 g-4">

                 <div class="col-md-4">
                     <div class="card border-0 shadow-sm h-100 about-card">
                         <div class="card-body text-center">

                             <i class="bi bi-heart-pulse-fill about-icon"></i>

                             <h4 class="mt-3">Our Values</h4>

                             <p class="text-muted">
                                 Compassion, excellence, integrity, and patient-centered
                                 care guide everything we do.
                             </p>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="card border-0 shadow-sm h-100 about-card">
                         <div class="card-body text-center">

                             <i class="bi bi-people-fill about-icon"></i>

                             <h4 class="mt-3">Expert Team</h4>

                             <p class="text-muted">
                                 Our specialists provide personalized care and support
                                 throughout every stage of pregnancy.
                             </p>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="card border-0 shadow-sm h-100 about-card">
                         <div class="card-body text-center">

                             <i class="bi bi-hospital-fill about-icon"></i>

                             <h4 class="mt-3">Modern Facilities</h4>

                             <p class="text-muted">
                                 Equipped with advanced technology, comfortable maternity
                                 suites, and emergency healthcare services.
                             </p>

                         </div>
                     </div>
                 </div>

             </div>

             <!-- Mission & Vision -->
             <div class="row mt-5">

                 <div class="col-md-6 mb-4">
                     <div class="card border-0 shadow-sm h-100 about-card">
                         <div class="card-body p-4">

                             <i class="bi bi-bullseye about-icon"></i>

                             <h3 class="fw-bold mt-3">Our Mission</h3>

                             <p class="text-muted">
                                 To provide world-class maternity and pregnancy care through
                                 advanced medical services, compassionate support, and
                                 personalized treatment plans for every mother and child.
                             </p>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-6 mb-4">
                     <div class="card border-0 shadow-sm h-100 about-card">
                         <div class="card-body p-4">

                             <i class="bi bi-eye-fill about-icon"></i>

                             <h3 class="fw-bold mt-3">Our Vision</h3>

                             <p class="text-muted">
                                 To become the most trusted maternity healthcare provider,
                                 ensuring safe pregnancies, healthy babies, and happy families
                                 through innovation and excellence.
                             </p>

                         </div>
                     </div>
                 </div>

             </div>


             <!-- Why Choose Us -->
             <div class="mt-5">

                 <div class="text-center mb-5">
                     <h2 class="fw-bold">Why Choose Mother Care Hospital?</h2>
                     <p class="text-muted">
                         We combine medical expertise with compassionate care to create a
                         comfortable and safe experience for every patient.
                     </p>
                 </div>

                 <div class="row g-4">

                     <div class="col-md-3">
                         <div class="text-center">
                             <i class="bi bi-shield-check text-pink fs-1"></i>
                             <h5 class="mt-3">Safe Pregnancy Care</h5>
                             <p class="text-muted">
                                 Comprehensive prenatal and postnatal support.
                             </p>
                         </div>
                     </div>

                     <div class="col-md-3">
                         <div class="text-center">
                             <i class="bi bi-heart-pulse-fill text-pink fs-1"></i>
                             <h5 class="mt-3">Expert Specialists</h5>
                             <p class="text-muted">
                                 Highly experienced gynecologists and obstetricians.
                             </p>
                         </div>
                     </div>

                     <div class="col-md-3">
                         <div class="text-center">
                             <i class="bi bi-clock-history text-pink fs-1"></i>
                             <h5 class="mt-3">24/7 Emergency</h5>
                             <p class="text-muted">
                                 Round-the-clock emergency maternity services.
                             </p>
                         </div>
                     </div>

                     <div class="col-md-3">
                         <div class="text-center">
                             <i class="bi bi-stars text-pink fs-1"></i>
                             <h5 class="mt-3">Modern Facilities</h5>
                             <p class="text-muted">
                                 Advanced diagnostic and delivery rooms.
                             </p>
                         </div>
                     </div>

                 </div>

             </div>


             <!-- Achievements -->
             <div id="achievement-section" class="mt-5 py-5 rounded-4 text-center"
                 style="background:linear-gradient(135deg,#f64d86,#ff82ad);">

                 <h2 class="text-white fw-bold">
                     Trusted by Thousands of Families
                 </h2>

                 <p class="text-white mb-5">
                     Delivering happiness and healthy beginnings every day.
                 </p>

                 <div class="row">

                     <div class="col-md-3">
                         <h1 class="text-white fw-bold counter" data-target="15000">0</h1>
                         <p class="text-white">Successful Deliveries</p>
                     </div>

                     <div class="col-md-3">
                         <h1 class="text-white fw-bold counter" data-target="50">0</h1>
                         <p class="text-white">Medical Specialists</p>
                     </div>

                     <div class="col-md-3">
                         <h1 class="text-white fw-bold counter" data-target="20">0</h1>
                         <p class="text-white">Years of Excellence</p>
                     </div>

                     <div class="col-md-3">
                         <h1 class="text-white fw-bold counter" data-target="98">0</h1>
                         <p class="text-white">Patient Satisfaction</p>
                     </div>

                 </div>

             </div>

         </div>

     </section>

     <script>
         document.addEventListener("DOMContentLoaded", function() {

             const section = document.getElementById("achievement-section");
             const counters = document.querySelectorAll(".counter");

             let started = false;

             const observer = new IntersectionObserver((entries) => {

                 if (entries[0].isIntersecting && !started) {

                     started = true;

                     counters.forEach(counter => {

                         const target = +counter.getAttribute("data-target");

                         let count = 0;

                         const increment = target / 100;

                         const updateCounter = () => {

                             if (count < target) {

                                 count += increment;

                                 counter.innerText = Math.ceil(count).toLocaleString();

                                 requestAnimationFrame(updateCounter);

                             } else {

                                 counter.innerText =
                                     target.toLocaleString() +
                                     (target === 15000 ? "+" : target === 98 ? "%" : "+");
                             }
                         };

                         updateCounter();
                     });
                 }

             }, {
                 threshold: 0.3
             });

             observer.observe(section);

         });
     </script>
 @endsection
