 @extends('layouts.app')
 @section('content')
     <style>
         :root {
             --primary: #f64d86;
             --light: #fff5f8;
         }

         .doctor-section {
             background: linear-gradient(to bottom, #fff, #fff5f8);
         }

         .section-badge {
             background: rgba(246, 77, 134, .12);
             color: var(--primary);
             padding: 10px 25px;
             border-radius: 50px;
             font-weight: 600;
             font-size: 14px;
         }

         .doctor-card {
             background: #fff;
             border: none;
             border-radius: 25px;
             overflow: hidden;
             transition: .4s ease;
             box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
             height: 100%;
         }

         .doctor-card:hover {
             transform: translateY(-12px);
             box-shadow: 0 20px 45px rgba(246, 77, 134, .18);
         }

         .doctor-img {
             position: relative;
         }

         .doctor-img img {
             width: 100%;
             height: 350px;
             object-fit: cover;
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
             font-weight: 600;
         }

         .status-badge {
             position: absolute;
             bottom: 15px;
             left: 15px;
             background: #28a745;
             color: #fff;
             padding: 7px 14px;
             border-radius: 30px;
             font-size: 12px;
         }

         .speciality {
             display: inline-block;
             background: #fff0f6;
             color: var(--primary);
             padding: 7px 14px;
             border-radius: 30px;
             font-size: 12px;
             margin-right: 5px;
             margin-bottom: 5px;
         }

         .rating {
             color: #ffc107;
         }

         .doctor-name {
             font-weight: 700;
             color: #222;
         }

         .social-links a {
             width: 40px;
             height: 40px;
             display: inline-flex;
             align-items: center;
             justify-content: center;
             border-radius: 50%;
             background: #fff0f6;
             color: var(--primary);
             text-decoration: none;
             margin-right: 8px;
             transition: .3s;
         }

         .social-links a:hover {
             background: var(--primary);
             color: #fff;
         }

         .btn-profile {
             border: 2px solid var(--primary);
             color: var(--primary);
             border-radius: 12px;
             font-weight: 600;
         }

         .btn-profile:hover {
             background: var(--primary);
             color: #fff;
         }

         .btn-book {
             background: var(--primary);
             color: #fff;
             border-radius: 12px;
             font-weight: 600;
             border: none;
         }

         .btn-book:hover {
             background: #e43f77;
             color: #fff;
         }

         .search-box {
             border-radius: 60px;
             overflow: hidden;
             background: #fff;
             box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
         }

         .search-box input {
             border: none;
             padding: 16px;
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
                     Meet Our Expert Doctors
                 </h2>

                 <p class="text-muted">
                     Dedicated maternity specialists committed to providing
                     exceptional care for mothers and babies.
                 </p>

             </div>

             <div class="row g-4">

                 {{-- {{ dump($doctors) }} --}}
                 <!-- Doctor Card -->
                 @foreach ($doctors as $doctor)
                     <div class="col-lg-4 col-md-6">

                         <div class="doctor-card">

                             <div class="doctor-img">

                                 <img src="{{ asset('uploads/doctors/' . $doctor->file_upload) }}" alt="Doctor">

                                 <span class="exp-badge">
                                     15+ Years
                                 </span>

                                 <span class="status-badge">
                                     Available Today
                                 </span>

                             </div>

                             <div class="p-4">

                                 <h5 class="doctor-name">
                                     {{ $doctor->doctor_name }}
                                 </h5>



                                 <span class="speciality">
                                     {{ $doctor->specialization }}
                                 </span>

                                 <span class="speciality">
                                     Fee RS: {{ $doctor->fees }}
                                 </span>

                                 <p class="text-muted mt-3">
                                     {{ $doctor->about_us }}
                                 </p>

                                 {{-- <div class="mb-3">
                                     <small>
                                         <i class="bi bi-people-fill text-danger"></i>
                                         2500+ Patients Treated
                                     </small>
                                 </div> --}}

                                 {{-- <div class="social-links mb-3">
                                     <a href="#"><i class="bi bi-facebook"></i></a>
                                     <a href="#"><i class="bi bi-linkedin"></i></a>
                                     <a href="#"><i class="bi bi-envelope-fill"></i></a>
                                 </div> --}}

                                 <div class="d-flex gap-2">
                                     <a class="btn btn-profile w-50" href="{{ url('/viewprofile/' . $doctor->id) }}">
                                         View Profile
                                     </a>

                                     <a class="btn btn-book w-50" href="{{ url('/appointment') }}">
                                         Book Now
                                     </a>
                                 </div>

                             </div>

                         </div>

                     </div>
                 @endforeach

             </div>

         </div>

     </section>
 @endsection
