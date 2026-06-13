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
     </style>


     <section class="ambulance-section py-5">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8 text-center">
                     <h2 class="mb-4">Ambulance Services</h2>
                     <p class="mb-4">We provide 24/7 ambulance services to ensure timely medical assistance. Our fleet of
                         well-equipped ambulances is ready to respond to emergencies and transport patients safely to
                         healthcare facilities.</p>
                 </div>
             </div>
             <div class="row g-4 mt-4">
                 <div class="col-md-4">
                     <div class="feature-box text-center p-4">
                         <i class="bi bi-truck fs-1 mb-3" style="color:#f64d86;"></i>
                         <h5>Emergency Response</h5>
                         <p>Rapid response to medical emergencies with trained paramedics on board.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="feature-box text-center p-4">
                         <i class="bi bi-heart-pulse fs-1 mb-3" style="color:#f64d86;"></i>
                         <h5>Advanced Equipment</h5>
                         <p>Our ambulances are equipped with advanced life support systems for critical care.</p>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="feature-box text-center p-4">
                         <i class="bi bi-person-check fs-1 mb-3" style="color:#f64d86;"></i>
                         <h5>Professional Staff</h5>
                         <p>Certified paramedics and medical professionals ensure patient safety during transport.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection
