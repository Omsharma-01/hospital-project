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
                 </div> <div class="row g-4 mt-4">

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
     </section>
 @endsection
