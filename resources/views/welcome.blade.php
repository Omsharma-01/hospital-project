 @extends('layouts.app')
 @section('content')
     <style>
         :root {
             --primary: #f64d86;
         }

         .doctor-section {
             padding: 80px 0;
             background: #fff7fa;
         }

         .doctor-card {
             background: #fff;
             border-radius: 20px;
             overflow: hidden;
             box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
             transition: .4s;
             margin-bottom: 30px;
             height: 100%;
             border: none;
         }

         .doctor-card:hover {
             transform: translateY(-10px);
             box-shadow: 0 20px 40px rgba(246, 77, 134, .20);
         }

         .doctor-img {
             position: relative;
             overflow: hidden;
         }

         .doctor-img img {
             width: 100%;
             height: 280px;
             object-fit: cover;
             transition: .5s;
         }

         .doctor-card:hover .doctor-img img {
             transform: scale(1.08);
         }

         .exp-badge {
             position: absolute;
             top: 15px;
             right: 15px;
             background: #f64d86;
             color: #fff;
             padding: 8px 15px;
             border-radius: 30px;
             font-size: 12px;
             font-weight: 700;
         }

         .doctor-content {
             padding: 25px;
         }

         .doctor-name {
             font-size: 22px;
             font-weight: 700;
             margin-bottom: 5px;
         }

         .specialization {
             color: #f64d86;
             font-weight: 600;
             margin-bottom: 10px;
         }

         .about-text {
             color: #666;
             font-size: 14px;
             line-height: 1.7;
             min-height: 70px;
         }

         .btn-profile {
             border: 2px solid #f64d86;
             color: #f64d86;
             border-radius: 50px;
             font-weight: 600;
         }

         .btn-profile:hover {
             background: #f64d86;
             color: #fff;
         }

         .btn-book {
             background: #f64d86;
             color: #fff;
             border-radius: 50px;
             font-weight: 600;
         }

         .btn-book:hover {
             background: #e43c75;
             color: #fff;
         }
     </style>
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

         .Mother {
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

         hero-image-box {
             position: relative;
             max-width: 550px;
             margin-left: auto;
         }

         .hero-image {
             width: 100%;
             height: auto;
             border-radius: 30px;
             object-fit: cover;
         }

         .info-card {
             position: absolute;
             bottom: 25px;
             right: -20px;
             background: #fff;
             padding: 15px 20px;
             border-radius: 15px;
             display: flex;
             align-items: center;
             gap: 12px;
             box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
         }

         .info-card i {
             font-size: 32px;
             color: #f64d86;
         }

         .info-card h5 {
             margin: 0;
             font-weight: 700;
             color: #f64d86;
         }

         .info-card span {
             font-size: 14px;
             color: #666;
         }

         @media(max-width:991px) {
             .hero-image-box {
                 margin: 40px auto 0;
             }

             .info-card {
                 right: 10px;
                 bottom: 10px;
             }
         }
     </style>
     <!-- HERO SECTION -->

     <section class="hero-section py-5">
         <div class="container">
             <div class="row align-items-center">


                 <!-- Left Content -->
                 <div class="col-lg-6" data-aos="fade-right">
                     <span class="badge bg-light text-pink px-3 py-2 mb-3" data-aos="flip-right">
                         <span style="font-size:20px;">🩷</span> Trusted Pregnancy Care Center
                     </span>

                     <h1 class="display-4 fw-bold">
                         Compassionate Care For
                         <span class="Mother">Mother & Baby</span>
                     </h1>

                     <p class="lead text-muted mt-3">
                         Supporting you through every stage of pregnancy with
                         expert doctors, modern facilities, and personalized care.
                     </p>

                     <div class="mt-4 ">
                         <a href="{{ url('/appointment') }}" class="btn btn-danger pink-color btn-lg me-3 ">
                             <i class="bi bi-calendar-check"></i>
                             Book Appointment
                         </a>

                         <a href="tel:+911234567890" class="btn btn-outline-pink btn-lg">
                             <i class="bi bi-telephone"></i>
                             Emergency Help
                         </a>
                     </div>

                     <div class="row mt-5">
                         <div class="col-4">
                             <h3 class="fw-bold text-pink">10K+</h3>
                             <small>Happy Mothers</small>
                         </div>

                         <div class="col-4">
                             <h3 class="fw-bold text-pink">25+</h3>
                             <small>Specialists</small>
                         </div>

                         <div class="col-4">
                             <h3 class="fw-bold text-pink">24/7</h3>
                             <small>Support</small>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6" data-aos="fade-left">
                     <!-- Right Image -->

                     <div>
                         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                             <div class="carousel-inner">
                                 <div class="carousel-item active">
                                     <img src="Assest/image/mother6.png" class="d-block img-fluid hero-image"
                                         alt="Mother Care Hospital">

                                 </div>
                                 <div class="carousel-item">
                                     <img src="Assest/image/mother7.png" class="d-block img-fluid hero-image"
                                         alt="Mother Care Hospital">
                                 </div>
                                 <div class="carousel-item">
                                     <img src="Assest/image/mother2.png" class="d-block img-fluid hero-image"
                                         alt="Mother Care Hospital">
                                 </div>
                             </div>
                             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                 data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                             </button>
                             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                 data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <!-- Right Image -->

         <!-- Right Side Image -->
         {{-- <div class="col-lg-6">
                     <div class="hero-image-box ms-auto">

                         <img src="Assest/image/mother6.png" class="img-fluid hero-image" alt="Mother Care Hospital">

                         <div class="info-card">
                             <i class="bi bi-heart-pulse-fill"></i>
                             <div>
                                 <h5>10K+</h5>
                                 <span>Healthy Deliveries</span>
                             </div>
                         </div>

                     </div>
                 </div> --}}
         ```


     </section>

     {{-- About-us --}}

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

                         <img src="uploads/doctors/psupp.jpg" class="img-fluid rounded-4 shadow" alt="Mother Care Hospital">

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

     <!-- SERVICES SECTION -->

     {{-- <section class="py-5 bg-light">
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

     </section> --}}

     <!-- SUPPORT BANNER -->

     {{-- <section class="py-4">
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

     </section> --}}


     {{-- <section id="about-us" class="py-5 bg-light">

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

     </section> --}}

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
                 @foreach ($services as $service)
                     <div class="col-lg-4 col-md-6">
                         <div class="card service-card border-0 shadow-lg h-100 rounded-4 overflow-hidden">

                             <!-- Service Image -->
                             <div class="service-image">
                                 <img src="{{ asset('uploads/services/' . $service->file_upload) }}"
                                     alt="{{ $service->service_name }}" class="img-fluid w-100 h-100"
                                     style="height:100px; object-fit:cover;">
                             </div>

                             <!-- Card Body -->
                             <div class="card-body p-4">

                                 <h4 class="fw-bold text-dark mb-3">
                                     {{ $service->service_name }}
                                 </h4>

                                 <p class="text-muted small">
                                     {{ Str::limit($service->description, 120) }}
                                 </p>

                                 <hr>

                                 <div class="d-flex justify-content-between mb-2">
                                     <span class="fw-semibold">💰 Price</span>
                                     <span class="text-success fw-bold">
                                         ₹{{ number_format($service->price) }}
                                     </span>
                                 </div>

                                 <div class="d-flex justify-content-between mb-2">
                                     <span class="fw-semibold">⏳ Duration</span>
                                     <span>{{ $service->duration }}</span>
                                 </div>

                                 <div class="d-flex justify-content-between mb-3">
                                     <span class="fw-semibold">📂 Category</span>
                                     <span class="badge bg-primary">
                                         {{ $service->category }}
                                     </span>
                                 </div>


                             </div>

                         </div>
                     </div>
                 @endforeach
             </div>


         </div>

     </section>
     {{-- <h1 class="text-dark text-center mt-5">OUR SERVICES: COMPREHENSIVE CARE FOR EVERY STEP.</h1> --}}

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



     <!--Doctors-->




     <section class="doctor-section">


         <div class="container">

             <div class="text-center mb-5">
                 <h2 class="fw-bold">Our Specialist Doctors</h2>
                 <p class="text-muted">
                     Meet our experienced maternity and healthcare specialists
                 </p>
             </div>

             <div class="row">

                 @foreach ($doctors as $row)
                     <div class="col-lg-4 col-md-6 col-sm-6">

                         <div class="doctor-card">

                             <div class="doctor-img">

                                 <img src="{{ asset('uploads/doctors/' . $row->file_upload) }}"
                                     alt="{{ $row->doctor_name }}">

                                 <span class="exp-badge">
                                     {{ $row->experience }}+
                                 </span>

                             </div>

                             <div class="doctor-content">

                                 <h5 class="doctor-name">
                                     {{ $row->doctor_name }}
                                 </h5>

                                 <div class="specialization">
                                     {{ $row->specialization }}
                                 </div>

                                 <p class="about-text">
                                     {{ Str::limit($row->about_us, 90) }}
                                 </p>

                                 <div class="d-grid gap-2">

                                     <a href="/viewprofile/{{ $row->id }}" class="btn btn-profile">

                                         <i class="bi bi-person-circle"></i>
                                         View Profile

                                     </a>

                                     <a href="/patient/dashboard" class="btn btn-book">

                                         <i class="bi bi-calendar-check"></i>
                                         Book Appointment

                                     </a>

                                 </div>

                             </div>

                         </div>

                     </div>
                 @endforeach

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
                                     <i class="fas fa-map-marker-alt"></i>
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

                         <img src="Assest/image/Contact.png" class="img-fluid rounded-4 shadow"
                             alt="Mother Care Hospital">



                     </div>

                 </div>
             </div>

         </div>
     </section>
 @endsection
