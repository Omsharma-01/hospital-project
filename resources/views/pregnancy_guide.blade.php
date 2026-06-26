 @extends('layouts.app')
 @section('content')
     <style>
         :root {
             --primary: #f64d86;
         }

         .guide-header {
             background: linear-gradient(135deg, #d63384, #ff6fae);
             color: #fff;
             border-radius: 20px;
             padding: 60px 30px;
         }

         .guide-card {
             border: none;
             border-radius: 20px;
             overflow: hidden;
             transition: .4s;
             box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
             height: 100%;
         }

         .guide-card:hover {
             transform: translateY(-10px);
         }

         .guide-icon {
             width: 80px;
             height: 80px;
             background: #fff0f6;
             color: #d63384;
             display: flex;
             align-items: center;
             justify-content: center;
             border-radius: 50%;
             font-size: 35px;
             margin: auto;
         }

         .feature-box {
             background: white;
             border-radius: 20px;
             padding: 25px;
             text-align: center;
             box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
             transition: .4s;
             height: 100%;
         }

         .feature-box:hover {
             transform: translateY(-8px);
         }

         .feature-box i {
             font-size: 45px;
             color: #d63384;
         }

         .timeline {
             border-left: 4px solid #d63384;
             padding-left: 25px;
         }

         .timeline-item {
             margin-bottom: 30px;
             position: relative;
         }

         .timeline-item::before {
             content: "";
             width: 18px;
             height: 18px;
             background: #d63384;
             border-radius: 50%;
             position: absolute;
             left: -36px;
             top: 5px;
         }

         .emergency-box {
             background: #d63384;
             color: white;
             border-radius: 20px;
             padding: 40px;
         }

         .emergency-box i {
             font-size: 50px;
         }

         .btn-pink {
             background: #d63384;
             color: white;
             border: none;
         }

         .btn-pink:hover {
             background: #bb2d75;
             color: white;
         }
     </style>

     <section class="container py-5">

         <div class="guide-header text-center">

             <span class="badge bg-light text-dark px-3 py-2">
                 Mother Care Hospital
             </span>

             <h1 class="fw-bold mt-3">
                 Pregnancy Care Guidelines
             </h1>

             <p class="mt-3">
                 Expert medical guidance, nutrition tips, exercise plans,
                 and trimester care to ensure a healthy pregnancy journey.
             </p>

             <a href="#" class="btn btn-light mt-3">
                 <i class="bi bi-calendar-check"></i>
                 Book Appointment
             </a>

         </div>

     </section>

     <!-- <section class="container py-5">

                                 <div class="row g-4">

                                     <div class="col-md-3">
                                         <div class="feature-box">
                                             <i class="bi bi-heart-pulse-fill"></i>
                                             <h5 class="mt-3">Doctor Advice</h5>
                                             <p>Regular consultations with specialists.</p>
                                         </div>
                                     </div>

                                     <div class="col-md-3">
                                         <div class="feature-box">
                                             <i class="bi bi-egg-fried"></i>
                                             <h5 class="mt-3">Healthy Nutrition</h5>
                                             <p>Balanced diet rich in vitamins and minerals.</p>
                                         </div>
                                     </div>

                                     <div class="col-md-3">
                                         <div class="feature-box">
                                             <i class="bi bi-activity"></i>
                                             <h5 class="mt-3">Safe Exercise</h5>
                                             <p>Light workouts and pregnancy yoga sessions.</p>
                                         </div>
                                     </div>

                                     <div class="col-md-3">
                                         <div class="feature-box">
                                             <i class="bi bi-shield-check"></i>
                                             <h5 class="mt-3">Mother Safety</h5>
                                             <p>24/7 monitoring and emergency support.</p>
                                         </div>
                                     </div>

                                 </div>

                             </section> -->
     <!--
                             <section class="container py-5">

                                 <h2 class="text-center fw-bold mb-5">
                                     Pregnancy Journey Timeline
                                 </h2>

                                 <div class="timeline">

                                     <div class="timeline-item">
                                         <h4 class="text-danger">First Trimester (1-12 Weeks)</h4>
                                         <p>
                                             Begin prenatal visits, take folic acid,
                                             maintain hydration, and avoid harmful substances.
                                         </p>
                                     </div>

                                     <div class="timeline-item">
                                         <h4 class="text-danger">Second Trimester (13-26 Weeks)</h4>
                                         <p>
                                             Growth scans, nutritional monitoring,
                                             regular exercise, and baby development tracking.
                                         </p>
                                     </div>

                                     <div class="timeline-item">
                                         <h4 class="text-danger">Third Trimester (27-40 Weeks)</h4>
                                         <p>
                                             Delivery planning, hospital preparation,
                                             fetal monitoring, and childbirth education.
                                         </p>
                                     </div>

                                 </div>

                             </section> -->

     <section class="container py-5">

         <div class="row g-4">

             <div class="col-lg-4">
                 <div class="guide-card card">
                     <img src="{{ asset('Assest/image/1m.jpg') }}" class="card-img-top">
                     <div class="card-body text-center">
                         <div class="guide-icon">
                             <i class="bi bi-person-badge-fill"></i>
                         </div>
                         <h4 class="mt-3">Doctor's Advice</h4>
                         <p>
                             Early prenatal care, regular checkups,
                             folic acid supplements, and healthy lifestyle habits.
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="guide-card card">
                     <img src="{{ asset('Assest/image/9m.jpg') }}" class="card-img-top">
                     <div class="card-body text-center">
                         <div class="guide-icon">
                             <i class="bi bi-camera2"></i>
                         </div>
                         <h4 class="mt-3">Ultrasound Monitoring</h4>
                         <p>
                             Safe imaging technology for monitoring
                             baby's growth and development.
                         </p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="guide-card card">
                     <img src="{{ asset('Assest/image/10m.jpg') }}" class="card-img-top">
                     <div class="card-body text-center">
                         <div class="guide-icon">
                             <i class="bi bi-basket2-fill"></i>
                         </div>
                         <h4 class="mt-3">Healthy Diet</h4>
                         <p>
                             Nutrient-rich foods, hydration,
                             vitamins, and balanced meals.
                         </p>
                     </div>
                 </div>
             </div>

         </div>

     </section>
     <section class="container py-5">

         <div class="emergency-box text-center">

             <i class="bi bi-ambulance"></i>

             <h2 class="mt-3">
                 24/7 Emergency Pregnancy Support
             </h2>

             <p>
                 Immediate assistance for labor pains,
                 bleeding, severe headaches, or any urgent concerns.
             </p>

             <div class="row mt-4">

                 <div class="col-md-6">
                     <h5>
                         <i class="bi bi-telephone-fill"></i>
                         Emergency Hotline
                     </h5>
                     <p>+91 98765 43210</p>
                 </div>

                 <div class="col-md-6">
                     <h5>
                         <i class="bi bi-envelope-fill"></i>
                         Email Support
                     </h5>
                     <p>support@mothercarehospital.com</p>
                 </div>

             </div>

         </div><!-- Bootstrap Icons -->

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

         <!-- AOS CSS -->

         <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

         <style>
             :root {
                 --primary: #d63384;
             }

             /* Section Background */
             .pregnancy-section {
                 padding: 100px 0;
                 position: relative;
                 overflow: hidden;
                 background:
                     radial-gradient(circle at top right,
                         rgba(255, 105, 180, .18) 0%,
                         transparent 35%),

                     radial-gradient(circle at bottom left,
                         rgba(255, 182, 193, .25) 0%,
                         transparent 40%),

                     linear-gradient(135deg,
                         #fff5fa 0%,
                         #ffe4f1 50%,
                         #fff0f7 100%);
             }

             /* Floating Hearts */
             .floating-heart {
                 position: absolute;
                 color: rgba(214, 51, 132, .08);
                 animation: floatHeart 6s infinite ease-in-out;
             }

             .heart-1 {
                 top: 80px;
                 left: 5%;
                 font-size: 80px;
             }

             .heart-2 {
                 bottom: 100px;
                 right: 5%;
                 font-size: 60px;
             }

             @keyframes floatHeart {

                 0%,
                 100% {
                     transform: translateY(0);
                 }

                 50% {
                     transform: translateY(-25px);
                 }
             }

             /* Heading */
             .gradient-title {
                 background: linear-gradient(90deg,
                         #d63384,
                         #ff6b9d,
                         #ff9f43);

                 -webkit-background-clip: text;
                 -webkit-text-fill-color: transparent;
                 font-weight: 800;
             }

             /* Hero Card */
             .hero-card {
                 background: rgba(255, 255, 255, .75);
                 backdrop-filter: blur(15px);
                 border-radius: 30px;
                 padding: 35px;
                 box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
             }

             /* Feature Cards */
             .feature-card {
                 background: rgba(255, 255, 255, .85);
                 backdrop-filter: blur(15px);

                 border-radius: 25px;
                 border: 1px solid rgba(255, 255, 255, .4);

                 padding: 30px;
                 text-align: center;
                 height: 100%;

                 transition: .4s;
             }

             .feature-card:hover {
                 transform: translateY(-15px);
                 box-shadow:
                     0 25px 50px rgba(214, 51, 132, .20);
             }

             /* Animated Icon Circle */
             .icon-circle {
                 width: 100px;
                 height: 100px;
                 margin: auto;
                 border-radius: 50%;
                 position: relative;

                 background: linear-gradient(135deg,
                         #ff5ea8,
                         #d63384);

                 display: flex;
                 align-items: center;
                 justify-content: center;

                 box-shadow:
                     0 15px 35px rgba(214, 51, 132, .35);

                 animation: float 3s infinite ease-in-out;
             }

             .icon-circle i {
                 color: #fff;
                 font-size: 45px;
             }

             .icon-circle::before {
                 content: '';
                 position: absolute;
                 inset: 0;
                 border-radius: 50%;
                 background: rgba(214, 51, 132, .20);

                 animation: pulse 2s infinite;
             }

             @keyframes float {

                 0%,
                 100% {
                     transform: translateY(0);
                 }

                 50% {
                     transform: translateY(-12px);
                 }
             }

             @keyframes pulse {
                 0% {
                     transform: scale(1);
                     opacity: .8;
                 }

                 100% {
                     transform: scale(1.5);
                     opacity: 0;
                 }
             }

             /* Statistics */
             .stats-card {
                 background: #fff;
                 border-radius: 20px;
                 padding: 25px;
                 text-align: center;
                 box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
             }

             .stats-card h2 {
                 color: var(--primary);
                 font-weight: 800;
             }

             /* CTA Button */
             .cta-btn {
                 padding: 14px 35px;
                 border-radius: 50px;
             }

             /* Emergency Floating Button */
             .emergency-btn {
                 position: fixed;
                 bottom: 25px;
                 right: 25px;

                 width: 70px;
                 height: 70px;

                 border-radius: 50%;
                 background: #dc3545;
                 color: #fff;

                 display: flex;
                 align-items: center;
                 justify-content: center;

                 font-size: 30px;
                 z-index: 999;

                 animation: emergencyPulse 2s infinite;
             }

             .emergency-btn:hover {
                 color: #fff;
             }

             @keyframes emergencyPulse {
                 0% {
                     box-shadow: 0 0 0 0 rgba(220, 53, 69, .5);
                 }

                 100% {
                     box-shadow: 0 0 0 25px rgba(220, 53, 69, 0);
                 }
             }
         </style>

         <section class="pregnancy-section">

             ```
             <!-- Floating Background Icons -->
             <div class="floating-heart heart-1">
                 <i class="bi bi-heart-fill"></i>
             </div>

             <div class="floating-heart heart-2">
                 <i class="bi bi-balloon-heart-fill"></i>
             </div>

             <div class="container">

                 <!-- Heading -->
                 <div class="text-center mb-5" data-aos="fade-up">

                     <span class="badge bg-danger px-3 py-2 rounded-pill">
                         Pregnancy Journey
                     </span>

                     <h1 class="gradient-title display-4 mt-3">
                         Your Beautiful Journey To Motherhood
                     </h1>

                     <p class="text-muted col-lg-8 mx-auto">
                         Complete maternity care, expert consultations,
                         pregnancy monitoring, emergency support,
                         and safe delivery planning.
                     </p>

                 </div>

                 <!-- Hero Section -->
                 <div class="row align-items-center g-5">

                     <div class="col-lg-6" data-aos="fade-right">

                         <img src="Assest/image/mother3.png" class="img-fluid" alt="Pregnancy Care">

                     </div>

                     <div class="col-lg-6" data-aos="fade-left">

                         <div class="hero-card">

                             <h3 class="text-danger fw-bold">
                                 Expert Pregnancy Care
                             </h3>

                             <p class="text-muted">
                                 Supporting mothers from Week 1 to Week 40 with
                                 regular checkups, nutrition plans, fetal monitoring,
                                 and emergency maternity care.
                             </p>

                             <div class="progress mt-4" style="height:15px;border-radius:50px;">
                                 <div class="progress-bar bg-danger" style="width:100%">
                                     Complete Pregnancy Care
                                 </div>
                             </div>

                             <div class="row text-center mt-4">

                                 <div class="col-4">
                                     <i class="bi bi-heart-pulse-fill text-danger fs-1"></i>
                                     <p class="small mt-2">Healthy Mother</p>
                                 </div>

                                 <div class="col-4">
                                     <i class="bi bi-person-hearts text-danger fs-1"></i>
                                     <p class="small mt-2">Expert Care</p>
                                 </div>

                                 <div class="col-4">
                                     <i class="bi bi-balloon-heart-fill text-danger fs-1"></i>
                                     <p class="small mt-2">Healthy Baby</p>
                                 </div>

                             </div>

                         </div>

                     </div>

                 </div>

                 <!-- Trimester Cards -->
                 <div class="row mt-5 g-4">

                     <div class="col-lg-4" data-aos="zoom-in">
                         <div class="feature-card">

                             <div class="icon-circle">
                                 <i class="bi bi-heart-pulse-fill"></i>
                             </div>

                             <h4 class="mt-4">1st Trimester</h4>

                             <p class="text-muted">
                                 Weeks 1 - 12
                             </p>

                             <ul class="list-unstyled">
                                 <li>✓ Pregnancy Confirmation</li>
                                 <li>✓ Health Screening</li>
                                 <li>✓ Nutrition Advice</li>
                                 <li>✓ Initial Ultrasound</li>
                             </ul>

                         </div>
                     </div>

                     <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                         <div class="feature-card">

                             <div class="icon-circle">
                                 <i class="bi bi-person-hearts"></i>
                             </div>

                             <h4 class="mt-4">2nd Trimester</h4>

                             <p class="text-muted">
                                 Weeks 13 - 27
                             </p>

                             <ul class="list-unstyled">
                                 <li>✓ Baby Growth Monitoring</li>
                                 <li>✓ Detailed Ultrasound</li>
                                 <li>✓ Regular Checkups</li>
                                 <li>✓ Maternal Wellness</li>
                             </ul>

                         </div>
                     </div>

                     <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                         <div class="feature-card">

                             <div class="icon-circle">
                                 <i class="bi bi-balloon-heart-fill"></i>
                             </div>

                             <h4 class="mt-4">3rd Trimester</h4>

                             <p class="text-muted">
                                 Weeks 28 - 40
                             </p>

                             <ul class="list-unstyled">
                                 <li>✓ Birth Planning</li>
                                 <li>✓ Fetal Monitoring</li>
                                 <li>✓ Delivery Preparation</li>
                                 <li>✓ Mother & Baby Safety</li>
                             </ul>

                         </div>
                     </div>

                 </div>

                 <!-- Statistics -->
                 <div class="row mt-5 text-center">

                     <div class="col-md-4" data-aos="flip-left">
                         <div class="stats-card">
                             <h2>5000+</h2>
                             <p>Healthy Deliveries</p>
                         </div>
                     </div>

                     <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
                         <div class="stats-card">
                             <h2>20+</h2>
                             <p>Expert Doctors</p>
                         </div>
                     </div>

                     <div class="col-md-4" data-aos="flip-left" data-aos-delay="400">
                         <div class="stats-card">
                             <h2>24/7</h2>
                             <p>Emergency Support</p>
                         </div>
                     </div>

                 </div>

                 <!-- CTA Buttons -->
                 <div class="text-center mt-5" data-aos="zoom-in">

                     <a href="/appointment" class="btn btn-pink btn-lg cta-btn me-2">
                         <i class="bi bi-calendar-heart-fill"></i>
                         Book Appointment
                     </a>

                     <a href="tel:+917050505083" class="btn btn-pink btn-lg cta-btn me-2">
                         <i class="bi bi-telephone-fill"></i>
                         Emergency Call
                     </a>

                 </div>

             </div>
             ```

         </section>

         <!-- Floating Ambulance Button -->


         <!-- AOS JS -->

         <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

         <script>
             AOS.init({
                 duration: 1200,
                 once: true
             });
         </script>


     </section>
 @endsection
