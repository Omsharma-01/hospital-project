 @extends('layouts.app')
 @section('content')
     <style>
         :root {
             --primary: #f64d86;
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
                 <span class="badge bg-danger pink-color px-3 py-2">
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

                         @if (session('success'))
                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                 {{ session('success') }}
                                 <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                             </div>
                         @endif

                         @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul class="mb-0">
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif

                         <h3 class="mb-4 text-center text-danger text-pink">
                             Appointment Form
                         </h3>

                         <form action="{{ route('appointment.store1') }}" method="POST">
                             @csrf

                             <div class="row g-3">

                                 <div class="col-md-6">
                                     <label class="form-label">Full Name</label>
                                     <input type="text" class="form-control" name="patient_name"
                                         placeholder="Enter Full Name" required>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Phone Number</label>
                                     <input type="tel" class="form-control" name="phone_number"
                                         placeholder="Enter Phone Number" required>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Age</label>
                                     <input type="number" class="form-control" name="age" placeholder="Enter Age"
                                         required>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Gender</label>
                                     <select class="form-select" name="gender" required>
                                         <option value="">Select Gender</option>
                                         <option value="Male">Male</option>
                                         <option value="Female">Female</option>
                                         <option value="Other">Other</option>
                                     </select>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Select Doctor</label>
                                     <select class="form-select" name="doctor_id" required>
                                         <option value="">Choose Doctor</option>
                                         @foreach ($doctor as $row)
                                             <option value="{{ $row->id }}">
                                                 {{ $row->doctor_name }}
                                             </option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="col-md-6">
                                     <label class="form-label">Blood Group</label>
                                     <select class="form-select" name="boold_group" required>
                                         <option value="">Select Blood Group</option>
                                         <option value="A+">A+</option>
                                         <option value="A-">A-</option>
                                         <option value="B+">B+</option>
                                         <option value="B-">B-</option>
                                         <option value="AB+">AB+</option>
                                         <option value="AB-">AB-</option>
                                         <option value="O+">O+</option>
                                         <option value="O-">O-</option>
                                     </select>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Address</label>
                                     <input type="text" class="form-control" name="address" placeholder="Enter Address"
                                         required>
                                 </div>
                                 <div class="col-md-6">
                                     <label class="form-label">Appointment Date</label>
                                     <input type="date" name="appointment_date" class="form-control" required>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label">Appointment Time</label>
                                     <input type="time" name="appointment_time" class="form-control" required>
                                 </div>

                                 <div class="col-12">
                                     <label class="form-label">Reason / Message</label>
                                     <textarea class="form-control" rows="4" name="reason" placeholder="Write Your Message" required></textarea>
                                 </div>

                                 <div class="col-12">
                                     <button type="submit" class="btn btn-pink w-100">
                                         Book Appointment
                                     </button>
                                 </div>

                             </div>
                         </form>

                     </div>

                 </div>

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
