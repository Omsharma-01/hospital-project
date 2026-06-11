 @extends('layouts.app')
 @section('content')
     <style>
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
                                     <p class="mb-0">+91 7050505083</p>
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
                         {{-- <div class="appointment-form"> --}}

                         

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

                                 <h3 class="mb-4 text-center text-danger">
                                     Appointment Form
                                 </h3>

                                 <form action="{{ route('appointment.store1') }}" method="POST">
                                     @csrf

                                     <div class="row g-3">

                                         <div class="col-md-6">
                                             <label class="form-label">Full Name</label>
                                             <input type="text" class="form-control" name="patient_name"
                                                 placeholder="Enter Full Name">
                                         </div>

                                         <div class="col-md-6">
                                             <label class="form-label">Phone Number</label>
                                             <input type="tel" class="form-control" name="phone_number"
                                                 placeholder="Enter Phone Number">
                                         </div>

                                         <div class="col-md-6">
                                             <label class="form-label">Age</label>
                                             <input type="number" class="form-control" name="age"
                                                 placeholder="Enter Age">
                                         </div>

                                         <div class="col-md-6">
                                             <label class="form-label">Gender</label>
                                             <select class="form-select" name="gender">
                                                 <option value="">Select Gender</option>
                                                 <option value="Male">Male</option>
                                                 <option value="Female">Female</option>
                                                 <option value="Other">Other</option>
                                             </select>
                                         </div>

                                         <div class="col-md-6">
                                             <label class="form-label">Select Doctor</label>
                                             <select class="form-select" name="doctor_id">
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
                                             <select class="form-select" name="boold_group">
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
                                             <input type="text" class="form-control" name="address"
                                                 placeholder="Enter Address">
                                         </div>
                                         <div class="col-md-6">
                                             <label class="form-label">Appointment Date</label>
                                             <input type="date" name="appointment_date" class="form-control">
                                         </div>

                                         <div class="col-md-6">
                                             <label class="form-label">Appointment Time</label>
                                             <input type="time" name="appointment_time" class="form-control">
                                         </div>

                                         <div class="col-12">
                                             <label class="form-label">Reason / Message</label>
                                             <textarea class="form-control" rows="4" name="reason" placeholder="Write Your Message"></textarea>
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
                     {{-- </div> --}}

                 </div>
             </div>

         </div>
     </section>
 @endsection
