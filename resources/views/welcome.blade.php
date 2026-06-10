 @extends('layouts.app')
 @section('content')
     <style>
         .hero-section {
             background: linear-gradient(135deg,
                     #fff5f8,
                     #ffffff);
             padding: 80px 0;
         }

         .text-pink {
             color: #f64d86;
         }

         .hero-badge {
             background: #ffe5ee;
             color: #f64d86;
             padding: 10px 18px;
             font-size: 14px;
         }

         .btn-pink {
             background: #f64d86;
             color: white;
             border: none;
             padding: 12px 25px;
         }

         .btn-pink:hover {
             background: #e33a73;
             color: white;
         }

         .btn-outline-pink {
             border: 2px solid #f64d86;
             color: #f64d86;
         }

         .btn-outline-pink:hover {
             background: #f64d86;
             color: white;
         }

         .hero-img {
             max-height: 600px;
             animation: float 4s ease-in-out infinite;
         }

         @keyframes float {
             0% {
                 transform: translateY(0);
             }

             50% {
                 transform: translateY(-10px);
             }

             100% {
                 transform: translateY(0);
             }
         }

         .feature-card {
             background: white;
             padding: 30px;
             border-radius: 15px;
             text-align: center;
             box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
             transition: .3s;
             height: 100%;
         }

         .feature-card:hover {
             transform: translateY(-10px);
         }

         .feature-card i {
             font-size: 40px;
             color: #f64d86;
             margin-bottom: 15px;
         }

         .feature-card h5 {
             font-weight: 700;
         }

         .hero-section {
             background: linear-gradient(135deg, #fff5f8, #ffe8ef);
         }

         .hero-img {
             max-height: 550px;
         }

         .service-card {
             background: #fff;
             padding: 30px;
             border-radius: 20px;
             box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
             transition: 0.4s;
             height: 100%;
         }

         .service-card:hover {
             transform: translateY(-10px);
         }

         .service-card i {
             font-size: 45px;
             color: #f64d86;
             margin-bottom: 15px;
         }

         .support-box {
             background: #f64d86;
             color: white;
             padding: 30px;
             border-radius: 20px;
         }

         .support-icon {
             font-size: 60px;
         }

         :root {
             --primary: #d63384;
         }

         .service-card:hover {
             transform: translateY(-10px);
             transition: .4s;
         }

         .service-icon {
             background: rgba(214, 51, 132, .1);
         }

         .service-icon i {
             color: var(--primary);
         }

         .btn-pink {
             background: var(--primary);
             color: #fff;
             border: none;
             padding: 12px 30px;
             border-radius: 30px;
         }

         .btn-pink:hover {
             background: #bb2d75;
             color: #fff;
         }

         .feature-box {
             padding: 30px 20px;
             border-radius: 20px;
             background: #fff;
             box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
             transition: .4s;
         }

         .feature-box:hover {
             transform: translateY(-10px);
         }

         .feature-box i {
             font-size: 50px;
             color: var(--primary);
             margin-bottom: 20px;
         }

         .stats-section {
             background: linear-gradient(135deg, #d63384, #f06292);
             color: white;
         }

         .stats-section h1 {
             font-size: 3rem;
             font-weight: 700;
         }

         .stats-section p {
             font-size: 1.1rem;
         }

         .service-badge {
             background: #d63384;
             color: white;
             padding: 10px 20px;
             border-radius: 50px;
         }

         .journey-card {
             padding: 30px;
             border-radius: 20px;
             background: white;
             box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
             transition: .4s;
         }

         .journey-card:hover {
             transform: translateY(-10px);
         }

         .journey-card i {
             font-size: 50px;
             color: #d63384;
             margin-bottom: 15px;
         }

         .service-hero {
             background: linear-gradient(135deg,
                     rgba(214, 51, 132, .08),
                     rgba(214, 51, 132, .02));
         }

         :root {
             --primary: #f64d86;
             --secondary: #fff4f8;
         }

         .contact-section {
             padding: 100px 0;
             background: linear-gradient(135deg, #fff7fa, #ffe9f1);
         }

         .section-title h2 {
             color: var(--primary);
             font-weight: 700;
         }

         .contact-card {
             background: #fff;
             border-radius: 25px;
             overflow: hidden;
             box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
         }

         /* Left Side */
         .contact-info {
             background: linear-gradient(135deg, #f64d86, #ff7ba7);
             color: #fff;
             padding: 50px 35px;
             height: 100%;
             position: relative;
         }

         .contact-info::before {
             content: "";
             position: absolute;
             width: 250px;
             height: 250px;
             background: rgba(255, 255, 255, 0.08);
             border-radius: 50%;
             top: -80px;
             right: -80px;
         }

         .contact-info h3 {
             font-weight: 700;
             margin-bottom: 35px;
         }

         .info-box {
             display: flex;
             align-items: center;
             margin-bottom: 25px;
         }

         .info-icon {
             width: 60px;
             height: 60px;
             border-radius: 50%;
             background: rgba(255, 255, 255, .2);
             display: flex;
             justify-content: center;
             align-items: center;
             font-size: 22px;
             transition: .4s;
         }

         .info-box:hover .info-icon {
             transform: rotate(360deg);
             background: #fff;
             color: var(--primary);
         }

         .info-content {
             margin-left: 15px;
         }

         .social-links {
             margin-top: 30px;
         }

         .social-links a {
             width: 45px;
             height: 45px;
             border-radius: 50%;
             background: #fff;
             color: var(--primary);
             display: inline-flex;
             align-items: center;
             justify-content: center;
             text-decoration: none;
             margin-right: 10px;
             transition: .3s;
         }

         .social-links a:hover {
             background: #222;
             color: #fff;
             transform: translateY(-5px);
         }

         /* Form */
         .appointment-form {
             padding: 50px;
             background: #fff;
         }

         .appointment-form h3 {
             color: var(--primary);
             font-weight: 700;
         }

         .form-control,
         .form-select {
             height: 55px;
             border-radius: 12px;
             border: 1px solid #ddd;
         }

         textarea.form-control {
             height: 140px;
         }

         .form-control:focus,
         .form-select:focus {
             border-color: var(--primary);
             box-shadow: 0 0 0 .2rem rgba(246, 77, 134, .15);
         }

         .btn-appointment {
             background: linear-gradient(135deg, #f64d86, #ff7ba7);
             border: none;
             color: #fff;
             padding: 14px 40px;
             border-radius: 30px;
             font-weight: 600;
             transition: .3s;
         }

         .btn-appointment:hover {
             transform: translateY(-3px);
             box-shadow: 0 10px 20px rgba(246, 77, 134, .3);
         }

         @media(max-width:768px) {

             .appointment-form,
             .contact-info {
                 padding: 30px;
             }
         }
     </style>
     <!-- HERO SECTION -->

     <section class="hero-section py-5">
         <div class="container">
             <div class="row align-items-center">

                 ```
                 <!-- Left Content -->
                 <div class="col-lg-6">
                     <span class="badge bg-light text-danger px-3 py-2 mb-3">
                         ❤️ Trusted Pregnancy Care Center
                     </span>

                     <h1 class="display-4 fw-bold">
                         Compassionate Care For
                         <span class="text-danger">Mother & Baby</span>
                     </h1>

                     <p class="lead text-muted mt-3">
                         Supporting you through every stage of pregnancy with
                         expert doctors, modern facilities, and personalized care.
                     </p>

                     <div class="mt-4">
                         <a href="#appointment" class="btn btn-danger btn-lg me-3">
                             <i class="bi bi-calendar-check"></i>
                             Book Appointment
                         </a>

                         <a href="tel:+911234567890" class="btn btn-outline-danger btn-lg">
                             <i class="bi bi-telephone"></i>
                             Emergency Help
                         </a>
                     </div>

                     <div class="row mt-5">
                         <div class="col-4">
                             <h3 class="fw-bold text-danger">10K+</h3>
                             <small>Happy Mothers</small>
                         </div>

                         <div class="col-4">
                             <h3 class="fw-bold text-danger">25+</h3>
                             <small>Specialists</small>
                         </div>

                         <div class="col-4">
                             <h3 class="fw-bold text-danger">24/7</h3>
                             <small>Support</small>
                         </div>
                     </div>
                 </div>

                 <!-- Right Image -->
                 <div class="col-lg-6 text-center">
                     <img src="Assest/image/mother6.png" class="img-fluid hero-img" alt="Mother Care">
                 </div>

             </div>
         </div>
         ```

     </section>

     <!-- SERVICES SECTION -->

     <section class="py-5 bg-light">
         <div class="container">

             ```
             <div class="text-center mb-5">
                 <h2 class="fw-bold">Our Services</h2>
                 <p class="text-muted">
                     Complete maternity care for mothers and newborns
                 </p>
             </div>

             <div class="row g-4">

                 <div class="col-md-6 col-lg-4">
                     <div class="service-card text-center">
                         <i class="bi bi-calendar-check"></i>
                         <h5>Appointment Booking</h5>
                         <p>Schedule visits with our experienced gynecologists.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4">
                     <div class="service-card text-center">
                         <i class="bi bi-heart-pulse"></i>
                         <h5>Pregnancy Tracking</h5>
                         <p>Monitor your baby's growth week by week.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4">
                     <div class="service-card text-center">
                         <i class="bi bi-hospital"></i>
                         <h5>Emergency Care</h5>
                         <p>24×7 maternity emergency support available.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4">
                     <div class="service-card text-center">
                         <i class="bi bi-file-earmark-medical"></i>
                         <h5>Health Records</h5>
                         <p>Securely access and manage your reports.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4">
                     <div class="service-card text-center">
                         <i class="bi bi-capsule"></i>
                         <h5>Medicine Reminder</h5>
                         <p>Never miss your vitamins and medications.</p>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-4">
                     <div class="service-card text-center">
                         <i class="bi bi-apple"></i>
                         <h5>Diet & Nutrition</h5>
                         <p>Healthy diet plans designed by experts.</p>
                     </div>
                 </div>

             </div>
         </div>
         ```

     </section>

     <!-- SUPPORT BANNER -->

     <section class="py-4">
         <div class="container">
             <div class="support-box">
                 <div class="row align-items-center">
                     <div class="col-md-2 text-center">
                         <i class="bi bi-headset support-icon"></i>
                     </div>

                     ```
                     <div class="col-md-10">
                         <h3 class="fw-bold">
                             We Are Here For You 24/7
                         </h3>
                         <p class="mb-0">
                             Speak with our maternity care experts anytime for guidance,
                             support, and emergency assistance.
                         </p>
                     </div>
                 </div>
             </div>
         </div>
         ```

     </section>


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

     <!--our service -->

     <section id="services" class="py-5 bg-light">

         <div class="container">

             <div class="text-center mb-5">
                 <span class="badge px-3 py-2" style="background:#f64d86;">
                     Our Services
                 </span>

                 <h2 class="fw-bold mt-3">
                     Comprehensive Care For Every Step
                 </h2>

                 <p class="text-muted mx-auto" style="max-width:700px;">
                     From pregnancy planning to postnatal recovery, our specialists
                     provide complete healthcare services for mothers, babies, and families.
                 </p>
             </div>

             <div class="row g-4">

                 <!-- Service 1 -->
                 <div class="col-lg-4 col-md-6">
                     <div class="card service-card border-0 shadow-sm h-100">

                         <div class="card-body text-center p-4">

                             <div class="service-icon">
                                 <i class="bi bi-heart-pulse-fill"></i>
                             </div>

                             <h4 class="mt-4">Prenatal Care</h4>

                             <p class="text-muted">
                                 Regular checkups, ultrasounds, nutrition guidance,
                                 and personalized pregnancy monitoring.
                             </p>

                             <a href="#" class="btn btn-outline-pink">
                                 Learn More
                             </a>

                         </div>

                     </div>
                 </div>

                 <!-- Service 2 -->
                 <div class="col-lg-4 col-md-6">
                     <div class="card service-card border-0 shadow-sm h-100">

                         <div class="card-body text-center p-4">

                             <div class="service-icon">
                                 <i class="bi bi-hospital-fill"></i>
                             </div>

                             <h4 class="mt-4">Delivery Care</h4>

                             <p class="text-muted">
                                 Advanced birthing suites and expert medical support
                                 for safe deliveries.
                             </p>

                             <a href="#" class="btn btn-outline-pink">
                                 Learn More
                             </a>

                         </div>

                     </div>
                 </div>

                 <!-- Service 3 -->
                 <div class="col-lg-4 col-md-6">
                     <div class="card service-card border-0 shadow-sm h-100">

                         <div class="card-body text-center p-4">

                             <div class="service-icon">
                                 <i class="bi bi-heart"></i>
                             </div>

                             <h4 class="mt-4">Postnatal Support</h4>

                             <p class="text-muted">
                                 Recovery programs, breastfeeding support,
                                 and emotional wellness care.
                             </p>

                             <a href="#" class="btn btn-outline-pink">
                                 Learn More
                             </a>

                         </div>

                     </div>
                 </div>

                 <!-- Service 4 -->
                 <div class="col-lg-4 col-md-6">
                     <div class="card service-card border-0 shadow-sm h-100">

                         <div class="card-body text-center p-4">

                             <div class="service-icon">
                                 <i class="bi bi-bandaid-fill "></i>
                             </div>

                             <h4 class="mt-4">Pediatric Care</h4>

                             <p class="text-muted">
                                 Vaccinations, routine health checks,
                                 and specialized child healthcare.
                             </p>

                             <a href="#" class="btn btn-outline-pink">
                                 Learn More
                             </a>

                         </div>

                     </div>
                 </div>

                 <!-- Service 5 -->
                 <div class="col-lg-4 col-md-6">
                     <div class="card service-card border-0 shadow-sm h-100">

                         <div class="card-body text-center p-4">

                             <div class="service-icon">
                                 <i class="bi bi-people-fill"></i>
                             </div>

                             <h4 class="mt-4">Reproductive Health</h4>

                             <p class="text-muted">
                                 Family planning, fertility consultations,
                                 and reproductive healthcare services.
                             </p>

                             <a href="#" class="btn btn-outline-pink">
                                 Learn More
                             </a>

                         </div>

                     </div>
                 </div>

                 <!-- Service 6 -->
                 <div class="col-lg-4 col-md-6">
                     <div class="card service-card border-0 shadow-sm h-100">

                         <div class="card-body text-center p-4">

                             <div class="service-icon">
                                 <i class="bi bi-person-hearts"></i>
                             </div>

                             <h4 class="mt-4">Women's Wellness</h4>

                             <p class="text-muted">
                                 Exercise programs, pelvic floor therapy,
                                 and overall health improvement.
                             </p>

                             <a href="#" class="btn btn-outline-pink">
                                 Learn More
                             </a>

                         </div>

                     </div>
                 </div>

             </div>

         </div>

     </section>
     <h1 class="text-dark text-center mt-5">OUR SERVICES: COMPREHENSIVE CARE FOR EVERY STEP.</h1>

     <section class="py-5">
         <div class="container">

             <div class="text-center mb-5">
                 <span class="badge bg-danger-subtle text-dark px-3 py-2">
                     Why Choose Us
                 </span>

                 <h2 class="fw-bold mt-3">
                     Dedicated Care for Mothers & Babies
                 </h2>

                 <p class="text-muted">
                     We provide compassionate, expert-led healthcare services designed
                     to support women throughout pregnancy, childbirth, and beyond.
                 </p>
             </div>

             <div class="row g-4">

                 <div class="col-md-3">
                     <div class="feature-box text-center">
                         <i class="bi bi-heart-pulse-fill"></i>
                         <h5>Expert Specialists</h5>
                         <p>
                             Highly qualified gynecologists, obstetricians,
                             and pediatricians.
                         </p>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="feature-box text-center">
                         <i class="bi bi-hospital-fill"></i>
                         <h5>Modern Facilities</h5>
                         <p>
                             Advanced diagnostic tools and state-of-the-art
                             maternity suites.
                         </p>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="feature-box text-center">
                         <i class="bi bi-shield-check"></i>
                         <h5>Safe Delivery</h5>
                         <p>
                             Comprehensive safety protocols and emergency
                             care services.
                         </p>
                     </div>
                 </div>

                 <div class="col-md-3">
                     <div class="feature-box text-center">
                         <i class="bi bi-clock-history"></i>
                         <h5>24/7 Support</h5>
                         <p>
                             Round-the-clock medical assistance for mothers
                             and newborns.
                         </p>
                     </div>
                 </div>

             </div>

         </div>
     </section>

     <section class="py-5 stats-section">

         <div class="container">

             <div class="row text-center">

                 <div class="col-md-3">
                     <h1 class="counter" data-target="15000">0</h1>
                     <p>Healthy Deliveries</p>
                 </div>

                 <div class="col-md-3">
                     <h1 class="counter" data-target="50">0</h1>
                     <p>Medical Specialists</p>
                 </div>

                 <div class="col-md-3">
                     <h1 class="counter" data-target="20">0</h1>
                     <p>Years Experience</p>
                 </div>

                 <div class="col-md-3">
                     <h1 class="counter" data-target="98">0</h1>
                     <p>Patient Satisfaction</p>
                 </div>

             </div>

         </div>

     </section>

     <!--contact-us-->


     <section class="contact-section">
         <div class="container">

             <div class="text-center mb-5">
                 <h2>
                     <i class="fas fa-heart-pulse me-2"></i>
                     Contact Mother Care Hospital
                 </h2>
                 <p class="text-muted">
                     Quality Care for Mothers & Children
                 </p>
             </div>

             <div class="contact-card">
                 <div class="row g-0">

                     <!-- Left Side -->
                     <div class="col-lg-4">
                         <div class="contact-info">

                             <h3>Get In Touch</h3>

                             <div class="info-box">
                                 <div class="info-icon">
                                     <i class="fas fa-location-dot"></i>
                                 </div>
                                 <div class="info-content">
                                     <h6>Address</h6>
                                     <p class="mb-0">Mithapur, Patna, Bihar - 800001</p>
                                 </div>
                             </div>

                             <div class="info-box">
                                 <div class="info-icon">
                                     <i class="fas fa-phone"></i>
                                 </div>
                                 <div class="info-content">
                                     <h6>Phone</h6>
                                     <p class="mb-0">+91 9876543210</p>
                                 </div>
                             </div>

                             <div class="info-box">
                                 <div class="info-icon">
                                     <i class="fas fa-envelope"></i>
                                 </div>
                                 <div class="info-content">
                                     <h6>Email</h6>
                                     <p class="mb-0">info@mothercarehospital.com</p>
                                 </div>
                             </div>

                             <div class="info-box">
                                 <div class="info-icon">
                                     <i class="fas fa-ambulance"></i>
                                 </div>
                                 <div class="info-content">
                                     <h6>Emergency</h6>
                                     <p class="mb-0">24/7 Ambulance Service</p>
                                 </div>
                             </div>

                             <div class="social-links">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-whatsapp"></i></a>
                                 <a href="#"><i class="fab fa-youtube"></i></a>
                             </div>

                         </div>
                     </div>

                     <!-- Right Side -->
                     <div class="col-lg-8">
                         <div class="appointment-form">

                             <h3 class="mb-4">
                                 <i class="fas fa-calendar-check me-2"></i>
                                 Book Appointment
                             </h3>

                             <form>

                                 <div class="row">

                                     <div class="col-md-6 mb-3">
                                         <input type="text" class="form-control" placeholder="Full Name">
                                     </div>

                                     <div class="col-md-6 mb-3">
                                         <input type="email" class="form-control" placeholder="Email Address">
                                     </div>

                                     <div class="col-md-6 mb-3">
                                         <input type="tel" class="form-control" placeholder="Phone Number">
                                     </div>

                                     <div class="col-md-6 mb-3">
                                         <input type="date" class="form-control">
                                     </div>

                                     <div class="col-md-12 mb-3">
                                         <select class="form-select">
                                             <option>Select Department</option>
                                             <option>Gynecology</option>
                                             <option>Pediatrics</option>
                                             <option>Cardiology</option>
                                             <option>Orthopedics</option>
                                             <option>Emergency</option>
                                         </select>
                                     </div>

                                     <div class="col-12 mb-3">
                                         <textarea class="form-control" placeholder="Write Your Message"></textarea>
                                     </div>

                                     <div class="text-center">
                                         <button type="submit" class="btn btn-appointment">
                                             <i class="fas fa-paper-plane me-2"></i>
                                             Book Appointment
                                         </button>
                                     </div>

                                 </div>

                             </form>

                         </div>
                     </div>

                 </div>
             </div>

         </div>
     </section>

     <!--Doctors-->

     <section>
         <div class="container-fluid">
             <div class="doctor section ms-5 me-5 mt-3 mb-3">
                 <div class="row">

                     <div class="col text-center">
                         <h4>Our Expert Doctors</h4>
                         <h1>Meet Our Compassionate Medical Team</h1>
                         <h3>Doctors Directory</h3>

                     </div>

                 </div>

                 <h4>
             </div>
         </div>

     </section>

     <section>
         <div class="container">
             <div class="row">

                 @foreach ($doctors as $row)
                     <div class=" doctors-card col-sm-6 col-md-3 col-lg-3">
                         <img src="{{ asset('uploads/doctors/' . $row->file_upload) }}" class="card-img-top "
                             height="130px" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">{{ $row->doctor_name }}</h5>
                             <h6>{{ $row->specialization }}</h6>
                             <h6>{{ $row->experience }} of experience</h6>
                             <p class="card-text"> {{ $row->about_us }}
                             </p>
                             <a href="/viewprofile/{{ $row->id }}" class="btn btn-outline-primary btn-sm"> View
                                 profile </a>
                             <button type="button" class="btn btn-primary btn-sm "> <i class="bi bi-calendar3"></i> Book
                                 Appointment</button>
                         </div>
                     </div>
                 @endforeach


             </div>
         </div>
     </section>

     <section>
         <div class="container-fluid">
             <div class="doctor section ms-5 me-5 mt-3 mb-3">
                 <div class="row">

                     <div class="col-8 text-start">
                         <h6> Find a specilist to find nameh doctor at your more specilist</h6>

                     </div>
                     <div class="col-4 text-start" width:50px>
                         <input placeholder="search" class="search-input">
                         <div class="search-icon">
                             <i class="bi bi-search"></i>
                         </div>
                     </div>

                 </div>

                 <h4>
             </div>
         </div>

     </section>

     <!--Appointment section-->

     <section>
         <div class="container-fluid">
             <div class="appointment section">
                 <div class="row">

                     <div class="appointment col text-center  ">
                         <h1>Book Your Appointment-Specializations</h1>

                     </div>

                 </div>

                 <h4>
             </div>
         </div>

     </section>

     <section>
         <div class="container">
             <div class="row">
                 <div class="col-md-6 ">
                     <div class="row">
                         <div class="col-4 ">
                             <div class="card">
                                 <div class="card-body"><i class="bi bi-calendar3 text-center"></i>
                                     <h5 class="card-title">Book appointment</h5>
                                     <p class="card-text">Schedule an appointment<br>
                                         with our experienced<br>
                                         doctord.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-4 ">
                             <div class="card">
                                 <div class="card-body"><i class="bi bi-calendar3 text-center"></i>
                                     <h5 class="card-title">Book appointment</h5>
                                     <p class="card-text">Schedule an appointment<br>
                                         with our experienced<br>
                                         doctord.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-4 ">
                             <div class="card">
                                 <div class="card-body"><i class="bi bi-calendar3 text-center"></i>
                                     <h5 class="card-title">Book appointment</h5>
                                     <p class="card-text">Schedule an appointment<br>
                                         with our experienced<br>
                                         doctord.</p>
                                     < </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         oooo
                     </div>



                 </div>
             </div>

     </section>

     <!-- Contact -->
     <div class="col-lg-3 col-md-6">
         <h5 class="footer-title">Contact Us</h5>

         <p>
             <i class="bi bi-geo-alt-fill"></i>
             Ranchi, Jharkhand, India
         </p>

         <p>
             <i class="bi bi-telephone-fill"></i>
             +91 98765 43210
         </p>

         <p>
             <i class="bi bi-envelope-fill"></i>
             info@mothercare.com
         </p>

         <p>
             <i class="bi bi-clock-fill"></i>
             Open 24/7
         </p>
     </div>

     </div>

     <hr>

     <div class="row align-items-center text-center">
         <div class="col-md-6 text-md-start">
             <p class="copyright">
                 © 2026 Mother Care Hospital. All Rights Reserved.
             </p>
         </div>

         <div class="col-md-6 text-md-end">
             <a href="#" class="footer-policy">Privacy Policy</a>
             |
             <a href="#" class="footer-policy">Terms & Conditions</a>
         </div>
     </div>
     </div>
     </footer>
 @endsection
