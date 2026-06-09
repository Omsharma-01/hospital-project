 @extends('layouts.app')
 @section('content')
     <style>
         :root {
             --primary: #d63384;
         }

         .doctor-section {
             background: #fff8fb;
         }

         .section-badge {
             background: rgba(214, 51, 132, .1);
             color: var(--primary);
             padding: 10px 20px;
             border-radius: 50px;
             font-weight: 600;
         }

         .doctor-card {
             border: none;
             border-radius: 25px;
             overflow: hidden;
             transition: .4s;
             box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
             background: #fff;
             height: 100%;
         }

         .doctor-card:hover {
             transform: translateY(-10px);
         }

         .doctor-img {
             position: relative;
             overflow: hidden;
         }

         .doctor-img img {
             height: 320px;
             width: 100%;
             object-fit: cover;
             transition: .5s;
         }

         .doctor-card:hover img {
             transform: scale(1.08);
         }

         .exp-badge {
             position: absolute;
             top: 15px;
             right: 15px;
             background: var(--primary);
             color: #fff;
             padding: 8px 15px;
             border-radius: 30px;
             font-size: 13px;
         }

         .status-badge {
             position: absolute;
             bottom: 15px;
             left: 15px;
             background: #198754;
             color: #fff;
             padding: 6px 15px;
             border-radius: 30px;
             font-size: 13px;
         }

         .speciality {
             background: #fff0f6;
             color: var(--primary);
             padding: 6px 12px;
             border-radius: 20px;
             font-size: 13px;
         }

         .rating {
             color: #ffc107;
         }

         .social-links a {
             color: var(--primary);
             font-size: 18px;
             margin-right: 10px;
         }

         .btn-book {
             background: var(--primary);
             color: white;
             border: none;
         }

         .btn-book:hover {
             background: #bb2d75;
             color: white;
         }

         .search-box {
             border-radius: 50px;
             overflow: hidden;
             box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
         }

         .search-box input {
             border: none;
             padding: 15px;
         }

         .search-box button {
             background: var(--primary);
             border: none;
         }
     </style>
     <section class="doctor-section py-5">

         <div class="container">

             <div class="text-center mb-5">

                 <span class="section-badge">
                     <i class="bi bi-heart-pulse-fill"></i>
                     Our Specialists
                 </span>

                 <h2 class="fw-bold mt-3">
                     Meet Our Compassionate Medical Team
                 </h2>

                 <p class="text-muted mx-auto" style="max-width:700px;">
                     Experienced gynecologists, pediatricians, neonatologists,
                     and maternity specialists dedicated to providing
                     exceptional care for mothers and babies.
                 </p>

             </div>
             <div class="col-lg-3 col-md-6 mb-4">

                 <div class="doctor-card">

                     <div class="doctor-img">

                         <img src="Assest/image/mother2.png" alt="doctor">

                         <span class="exp-badge">
                             15+ Years
                         </span>

                         <span class="status-badge">
                             Available Today
                         </span>

                     </div>

                     <div class="p-4">

                         <h5 class="fw-bold">
                             Dr. Anya Sharma
                         </h5>

                         <div class="rating mb-2">
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <i class="bi bi-star-fill"></i>
                             <small class="text-muted">(4.9)</small>
                         </div>

                         <div class="mb-3">

                             <span class="speciality">
                                 OB-GYN
                             </span>

                             <span class="speciality">
                                 Fetal Medicine
                             </span>

                         </div>

                         <p class="text-muted small">
                             Specialist in high-risk pregnancy,
                             prenatal care, fetal monitoring,
                             and safe delivery planning.
                         </p>

                         <div class="mb-3">

                             <small>
                                 <i class="bi bi-people-fill text-pink"></i>
                                 2500+ Patients Treated
                             </small>

                             <br>

                             <small>
                                 <i class="bi bi-award-fill text-pink"></i>
                                 Board Certified Specialist
                             </small>

                         </div>

                         <div class="social-links mb-3">

                             <a href="#">
                                 <i class="bi bi-facebook"></i>
                             </a>

                             <a href="#">
                                 <i class="bi bi-linkedin"></i>
                             </a>

                             <a href="#">
                                 <i class="bi bi-envelope-fill"></i>
                             </a>

                         </div>

                         <div class="d-flex gap-2">

                             <button class="btn btn-outline-secondary btn-sm w-50">
                                 Profile
                             </button>

                             <button class="btn btn-book btn-sm w-50">
                                 Appointment
                             </button>

                         </div>

                     </div>

                 </div>

             </div>

             <section class="py-5 bg-light">

                 <div class="container">

                     <div class="row align-items-center">

                         <div class="col-lg-6">

                             <h3 class="fw-bold">
                                 Find Your Specialist
                             </h3>

                             <p class="text-muted">
                                 Search doctors by name, specialty,
                                 experience, or department.
                             </p>

                         </div>

                         <div class="col-lg-6">

                             <div class="input-group search-box">

                                 <input type="text" class="form-control" placeholder="Search doctor, specialty...">

                                 <button class="btn text-white px-4">

                                     <i class="bi bi-search"></i>

                                 </button>

                             </div>

                         </div>

                     </div>

                 </div>

             </section>

     </section>
 @endsection
