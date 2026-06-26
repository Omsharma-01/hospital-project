 @extends('layouts.app')
 @section('content')
     <style>
         .ambulance-section {
             background: #fff8f8;
         }

         .feature-box {
             background: #ffffff;
             padding: 15px;
             border-radius: 12px;
             box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
             font-weight: 600;
             transition: 0.3s;
         }

         .feature-box:hover {
             transform: translateY(-5px);
         }

         .ambulance-section h2 {
             color: #dc3545;
         }

         root {
             --primary: #f64d86;
         }

         .ambulance-section {
             background: #fff8fb;
         }

         .ambulance-badge {
             background: rgba(246, 77, 134, .1);
             color: var(--primary);
             padding: 10px 20px;
             border-radius: 50px;
             font-weight: 600;
         }

         .dashboard-card {
             background: #fff;
             border-radius: 25px;
             padding: 30px;
             box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
             transition: .4s;
             height: 100%;
         }

         .dashboard-card:hover {
             transform: translateY(-8px);
         }

         .card-icon {
             width: 70px;
             height: 70px;
             background: #fff0f6;
             color: var(--primary);
             border-radius: 50%;
             display: flex;
             align-items: center;
             justify-content: center;
             font-size: 30px;
             margin-bottom: 20px;
         }

         .status-live {
             display: inline-block;
             background: #198754;
             color: #fff;
             padding: 6px 15px;
             border-radius: 30px;
             margin-bottom: 15px;
         }

         .alert-card {
             border-left: 5px solid #dc3545;
         }

         .map-card {
             background: #fff;
             border-radius: 25px;
             overflow: hidden;
             box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
         }

         .map-header {
             background: var(--primary);
             color: #fff;
             padding: 20px;
         }
     </style>


     <style>
         :root {
             --primary: #f64d86;
             --light: #fff7fa;
         }

         .ambulance-section {
             background: linear-gradient(180deg, #fff7fa, #ffffff);
         }

         .section-badge {
             display: inline-block;
             padding: 10px 25px;
             border-radius: 50px;
             background: rgba(246, 77, 134, .1);
             color: var(--primary);
             font-weight: 600;
         }

         .ambulance-card {
             background: #fff;
             border-radius: 25px;
             padding: 30px;
             box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
             transition: .4s;
             position: relative;
             overflow: hidden;
         }

         .ambulance-card:hover {
             transform: translateY(-10px);
         }

         .ambulance-card::before {
             content: '';
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 5px;
             background: linear-gradient(90deg, #f64d86, #ff9dbd);
         }

         .moving-ambulance {
             font-size: 60px;
             color: var(--primary);
             animation: moveAmbulance 3s infinite alternate;
         }

         @keyframes moveAmbulance {
             from {
                 transform: translateX(-10px);
             }

             to {
                 transform: translateX(20px);
             }
         }

         .alarm-icon {
             font-size: 55px;
             color: #dc3545;
             animation: ring 1s infinite;
         }

         @keyframes ring {
             0% {
                 transform: rotate(0deg);
             }

             25% {
                 transform: rotate(10deg);
             }

             50% {
                 transform: rotate(-10deg);
             }

             75% {
                 transform: rotate(10deg);
             }

             100% {
                 transform: rotate(0deg);
             }
         }

         .live-dot {
             width: 12px;
             height: 12px;
             background: #28a745;
             border-radius: 50%;
             display: inline-block;
             animation: pulse 1.5s infinite;
         }

         @keyframes pulse {
             0% {
                 box-shadow: 0 0 0 0 rgba(40, 167, 69, .8);
             }

             100% {
                 box-shadow: 0 0 0 15px rgba(40, 167, 69, 0);
             }
         }

         .info-box {
             background: #fff7fa;
             padding: 15px;
             border-radius: 15px;
             margin-bottom: 15px;
         }

         .info-box i {
             color: var(--primary);
             margin-right: 10px;
         }

         .btn-pink {
             background: var(--primary);
             color: #fff;
             border: none;
             border-radius: 12px;
         }

         .btn-pink:hover {
             background: #e63d77;
             color: #fff;
         }

         .map-card {
             overflow: hidden;
             border-radius: 25px;
             box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
         }

         .map-header {
             background: linear-gradient(135deg, #f64d86, #ff8fb5);
             color: #fff;
             padding: 20px;
         }

         :root {
             --primary: #f64d86;
         }

         .ambulance-section {
             background: linear-gradient(180deg, #fff8fb, #ffffff);
         }

         .section-badge {
             background: rgba(246, 77, 134, .12);
             color: var(--primary);
             padding: 10px 25px;
             border-radius: 50px;
             font-weight: 600;
         }

         .ambulance-card {
             background: #fff;
             border-radius: 25px;
             padding: 30px;
             box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
         }

         .ambulance-icon {
             width: 100px;
             height: 100px;
             margin: auto;
             border-radius: 50%;
             background: #fff0f6;
             display: flex;
             align-items: center;
             justify-content: center;
             color: var(--primary);
             font-size: 45px;
             animation: moveAmbulance 2s infinite alternate;
         }

         @keyframes moveAmbulance {
             from {
                 transform: translateX(-10px);
             }

             to {
                 transform: translateX(10px);
             }
         }

         .status-badge {
             display: inline-flex;
             align-items: center;
             gap: 8px;
             margin-top: 15px;
             background: #e9fff0;
             color: #198754;
             padding: 8px 18px;
             border-radius: 30px;
         }

         .pulse-dot {
             width: 10px;
             height: 10px;
             background: #198754;
             border-radius: 50%;
             animation: pulse 1.5s infinite;
         }

         @keyframes pulse {
             0% {
                 box-shadow: 0 0 0 0 rgba(25, 135, 84, .7);
             }

             100% {
                 box-shadow: 0 0 0 12px rgba(25, 135, 84, 0);
             }
         }

         .info-card {
             display: flex;
             align-items: center;
             gap: 15px;
             background: #fff8fb;
             padding: 15px;
             border-radius: 15px;
             margin-bottom: 15px;
         }

         .info-card i {
             font-size: 22px;
             color: var(--primary);
         }

         .info-card h6 {
             margin: 0;
             font-weight: 600;
         }

         .btn-pink {
             background: var(--primary);
             color: #fff;
             border: none;
             padding: 12px;
         }

         .btn-pink:hover {
             background: #e43d77;
             color: #fff;
         }

         .map-card {
             overflow: hidden;
             border-radius: 25px;
             box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
         }

         .map-header {
             background: linear-gradient(135deg, #f64d86, #ff98ba);
             color: #fff;
             padding: 20px;
             display: flex;
             justify-content: space-between;
             align-items: center;
         }

         .ambulance-section {
             background: #fff5f8;
         }

         .section-badge {
             background: #f64d86;
             color: #fff;
             padding: 10px 22px;
             border-radius: 50px;
             font-weight: 600;
         }

         .ambulance-card {
             background: #fff;
             border-radius: 20px;
             padding: 30px;
             box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
             position: relative;
             transition: .4s;
             height: 100%;
             overflow: hidden;
         }

         .ambulance-card:hover {
             transform: translateY(-10px);
             box-shadow: 0 20px 40px rgba(246, 77, 134, .25);
         }

         .ambulance-card::before {
             content: '';
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 5px;
             background: #f64d86;
         }

         .status-badge {
             position: absolute;
             top: 20px;
             right: 20px;
             background: #e8fff1;
             color: #28a745;
             padding: 6px 12px;
             border-radius: 30px;
             font-size: 13px;
             font-weight: 600;
         }

         .ambulance-icon {
             width: 80px;
             height: 80px;
             background: #f64d86;
             color: #fff;
             border-radius: 50%;
             display: flex;
             align-items: center;
             justify-content: center;
             font-size: 35px;
             margin-bottom: 20px;
         }

         .info-item {
             margin-bottom: 15px;
             padding-bottom: 15px;
             border-bottom: 1px solid #eee;
         }

         .btn-call {
             background: #f64d86;
             color: #fff;
             border: none;
             border-radius: 10px;
             font-weight: 600;
             padding: 12px;
         }

         .btn-call:hover {
             background: #e63a75;
             color: #fff;
         }

         .btn-map {
             border: 2px solid #f64d86;
             color: #f64d86;
             border-radius: 10px;
             font-weight: 600;
             padding: 12px;
         }

         .btn-map:hover {
             background: #f64d86;
             color: #fff;
         }

         .ambulance-card:hover .ambulance-icon {
             transform: scale(1.1);
             transition: .4s;
         }
     </style>



     <section class="ambulance-section py-5">
         <div class="container">

             <div class="text-center mb-5">
                 <span class="section-badge">🚑 Emergency Ambulance Service mamta wahan</span>
                 <h2 class="mt-3 fw-bold text-pink" >
                     24×7 Ambulance & Emergency Support
                 </h2>
                 <p class="text-muted">
                     Quick response ambulance services with trained medical staff.
                 </p>
             </div>

             <div class="row g-4">
                 @foreach ($ambulance as $ambulance)
                     <!-- Ambulance Card -->

                     <div class="col-lg-4 col-md-6">
                         <div class="ambulance-card">

                             <div class="status-badge">
                                 ● Active
                             </div>

                             <div class="ambulance-icon">
                                 🚑
                             </div>

                             <h4 class="fw-bold mb-3">
                                  {{ $ambulance->ambulance_name }}
                             </h4>

                             <div class="info-item">
                                 <strong>Ambulance Number</strong>
                                  {{ $ambulance->ambulance_no }}
                             </div>

                             <div class="info-item">
                                 <strong>Driver Name</strong>
                                 <p class="mb-0"> {{ $ambulance->driver_name }} </p>
                             </div>

                             <div class="info-item">
                                 <strong>Address</strong>
                                  {{ $ambulance->address }}
                             </div>

                             <div class="d-flex gap-2 mt-4">

                                 <a href="tel:+919876543210" class="btn btn-call flex-fill">
                                     Call Now
                                 </a>

                                 {{-- <a href="https://maps.google.com" target="_blank" class="btn btn-map flex-fill">
                                 View Map
                             </a> --}}

                             </div>

                         </div>

                     </div>
                 @endforeach

                 <!-- Duplicate card for multiple ambulances -->
                 {{-- <div class="col-lg-4 col-md-6">
                     <div class="ambulance-card">

                         <div class="status-badge">
                             ● Active
                         </div>

                         <div class="ambulance-icon">
                             🚑
                         </div>

                         <h4 class="fw-bold mb-3">
                             Emergency Ambulance
                         </h4>

                         <div class="info-item">
                             <strong>Ambulance Number</strong>
                             <p class="mb-0">+91 8409573224</p>
                         </div>

                         <div class="info-item">
                             <strong>Hospital Name</strong>
                             <p class="mb-0">Mother Care Hospital</p>
                         </div>

                         <div class="info-item">
                             <strong>Address</strong>
                             <p class="mb-0">
                                 Circular Road, Ranchi, Jharkhand
                             </p>
                         </div>

                         <div class="d-flex gap-2 mt-4">
                             <a href="tel:+919123456789" class="btn btn-call flex-fill">
                                 Call Now
                             </a>

                             <a href="https://maps.google.com" target="_blank" class="btn btn-map flex-fill">
                                 View Map
                             </a>
                         </div>

                     </div>
                 </div> --}}
                 <div class="row g-4 mt-4">

                     <!-- Emergency Alert -->
                     <div class="col-md-4">
                         <div class="feature-box text-center p-4">
                             <i class="bi bi-bell-fill fs-1 text-danger"></i>
                             <h5 class="mt-3">Emergency Alert</h5>
                             <p>
                                 Send instant emergency alerts for immediate ambulance dispatch.
                             </p>
                             <button class="btn btn-danger">
                                 <i class="bi bi-exclamation-triangle-fill"></i>
                                 SOS Alert
                             </button>
                         </div>
                     </div>

                     <!-- Ambulance Status -->
                     <div class="col-md-4">
                         <div class="feature-box text-center p-4">
                             <i class="bi bi-truck fs-1 text-success"></i>
                             <h5 class="mt-3">Ambulance Status</h5>
                             <p>Current Status</p>

                             <span class="badge bg-success fs-6">
                                 Available
                             </span>

                             <!-- Example -->
                             <!-- On Duty -->
                             <!-- <span class="badge bg-warning text-dark fs-6">On Duty</span> -->
                         </div>
                     </div>

                     <!-- Live Location -->
                     <div class="col-md-4">
                         <div class="feature-box text-center p-4">
                             <i class="bi bi-geo-alt-fill fs-1 text-primary"></i>
                             <h5 class="mt-3">Live Tracking</h5>
                             <p>
                                 Track ambulance location in real time.
                             </p>

                             <a href="#" class="btn btn-primary">
                                 <i class="bi bi-map"></i>
                                 View Location
                             </a>
                         </div>
                     </div>

                 </div>

             </div>


         </div>



         </div>
     </section>

     <!-- Map -->

     <div class="container mt-5">
         <div class="map-card mt-5">

             <div class="map-header">
                 <h4 class="mb-0">
                     <i class="bi bi-geo-alt-fill"></i>
                     Live GPS Tracking
                 </h4>
             </div>

             <iframe src="https://maps.google.com/maps?q=Ranchi&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                 height="450" style="border:0;">
             </iframe>

         </div>
     </div>


     </div>


     </section>


     <!-- Add more sections here alram ,map -->
 @endsection
