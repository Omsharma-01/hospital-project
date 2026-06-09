 @extends('layouts.app')
 @section('content')
     <style>
         :root {
             --primary: #d63384;
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

     <section class="container py-5">

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

     </section>

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

     </section>

     <section class="container py-5">

         <div class="row g-4">

             <div class="col-lg-4">
                 <div class="guide-card card">
                     <img src="doc21.webp" class="card-img-top">
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
                     <img src="ultrasound-compressed.jpg" class="card-img-top">
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
                     <img src="Doc22food.jpg" class="card-img-top">
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

         </div>

     </section>
 @endsection
