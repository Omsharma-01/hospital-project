 @extends('layouts.app')
 @section('content')
     <style>
         <styl> :root {
             --primary: #d63384;
         }

         .appointment-section {
             padding: 80px 0;
             background: #fff5fa;
         }

         .appointment-title {
             text-align: center;
             margin-bottom: 50px;
         }

         .appointment-title h1 {
             color: var(--primary);
             font-weight: 700;
         }

         .appointment-card {
             background: #fff;
             border-radius: 20px;
             padding: 25px;
             text-align: center;
             box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
             transition: .4s;
             height: 100%;
         }

         .appointment-card:hover {
             transform: translateY(-10px);
         }

         .appointment-card i {
             font-size: 50px;
             color: var(--primary);
             margin-bottom: 15px;
         }

         .appointment-form {
             background: white;
             padding: 35px;
             border-radius: 20px;
             box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
         }

         .btn-pink {
             background: var(--primary);
             color: white;
             border: none;
             padding: 12px 30px;
         }

         .btn-pink:hover {
             background: #bb2d75;
             color: white;
         }
     </style>

     <section class="appointment-section">

         <div class="container">

             <!-- Heading -->

             <div class="appointment-title">
                 <span class="badge bg-danger px-3 py-2">
                     Appointment Booking
                 </span>

                 <h1 class="mt-3">
                     Book Your Appointment
                 </h1>

                 <p class="text-muted">
                     Schedule consultations with our experienced maternity,
                     gynecology and pediatric specialists.
                 </p>
             </div>

             <div class="row g-4">

                 <!-- Left Side -->

                 <div class="col-lg-6">

                     <div class="row g-4">

                         <div class="col-md-6">
                             <div class="appointment-card">
                                 <i class="bi bi-calendar-check-fill"></i>
                                 <h5>Easy Booking</h5>
                                 <p>
                                     Schedule appointments online in just a few clicks.
                                 </p>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="appointment-card">
                                 <i class="bi bi-person-heart"></i>
                                 <h5>Expert Doctors</h5>
                                 <p>
                                     Consult experienced specialists and healthcare professionals.
                                 </p>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="appointment-card">
                                 <i class="bi bi-clock-history"></i>
                                 <h5>24/7 Support</h5>
                                 <p>
                                     Get round-the-clock assistance for urgent needs.
                                 </p>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="appointment-card">
                                 <i class="bi bi-heart-pulse-fill"></i>
                                 <h5>Mother Care</h5>
                                 <p>
                                     Specialized maternity and pregnancy healthcare services.
                                 </p>
                             </div>
                         </div>

                     </div>

                 </div>

                 <!-- Right Side Form -->

                 <div class="col-lg-6">

                     <div class="appointment-form">

                         <h3 class="mb-4 text-center text-danger">
                             Appointment Form
                         </h3>

                         <form>

                             <div class="row">

                                 <div class="col-md-12 mb-3">
                                     <input type="text" class="form-control" placeholder="Full Name">
                                 </div>

                                 <div class="col-md-12 mb-3">
                                     <input type="email" class="form-control" placeholder="Email Address">
                                 </div>
                             </div>
                             <div class="col-md-12 mb-3">
                                 <input type="tel" class="form-control" placeholder="Phone Number">
                             </div>
                             <div class="col-md-12 mb-3">
                                 <select class="form-select">
                                     <option>Select Doctor</option>
                                     <option>Dr.Neha sharma</option>
                                     <option>Dr.Priti Nayak</option>
                                     <option>DR.Sanjeet kumar</option>
                                     <option>Dr.Aman sharma  </option>
                                 </select>
                             </div>
                             <div class="col-md-6 mb-3">
    <input type="date" name="appointment_date" class="form-control">
</div>
</div>

                             <div class="mb-3">
                                 <input type="date" class="form-control">
                             </div>

                             <div class="mb-3">
                                 <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                             </div>

                             <button class="btn btn-pink w-100">
                                 <i class="bi bi-calendar-check-fill"></i>
                                 Book Appointment
                             </button>

                         </form>

                     </div>

                 </div>

             </div>

         </div>

     </section>


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

     {{-- <section>
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

     </section> --}}
 @endsection
