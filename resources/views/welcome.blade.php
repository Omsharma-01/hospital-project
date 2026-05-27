 @extends('layouts.app')
 @section('content')
     <!-- Carousel -->
     <div id="carouselExampleDark" class="carousel carousel-dark slide">

         <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                 aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                 aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
             <div class="carousel-item active" data-bs-interval="10000">
                 <img src="Assest/image/mother6.png" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                     <h1 class="compassionate">Compassionate Care</h1>
                     <p class="sub_title">For You & Your Baby</p>
                     <p>We provide complete care and support<br>
                         throughout your pregnancy journey.</p>

                     <button type="button" class="btn btn-primary btn-lg"> <i class="bi bi-calendar3"></i> Book
                         Appointment</button>

                     <button type="button" class="btn btn-outline-primary" disabled> <i class="bi bi-telephone"></i>
                         Emergency Help </button>

                 </div>
             </div>
             <div class="carousel-item" data-bs-interval="2000">
                 <img src="Assest/image/mother2.png" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                     <h1 class="compassionate">Compassionate Care</h1>
                     <p class="sub_title">For You & Your Baby</p>
                     <p>We provide complete care and support<br>
                         throughout your pregnancy journey.</p>

                     <button type="button" class="btn btn-primary btn-lg"> <i class="bi bi-calendar3"></i> Book
                         Appointment</button>

                     <button type="button" class="btn btn-outline-primary" disabled> <i class="bi bi-telephone"></i>
                         Emergency Help </button>

                 </div>
             </div>
             <div class="carousel-item">
                 <img src="Assest/image/mother3.png" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">

                     <h1 class="compassionate">Compassionate Care</h1>
                     <p class="sub_title">For You & Your Baby</p>
                     <p>We provide complete care and support<br>
                         throughout your pregnancy journey.</p>

                     <button type="button" class="btn btn-primary btn-lg"> <i class="bi bi-calendar3"></i> Book
                         Appointment</button>

                     <button type="button" class="btn btn-outline-primary" disabled> <i class="bi bi-telephone"></i>
                         Emergency Help </button>


                 </div>
             </div>
         </div>

         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>


     </div>
     <!-- card section after carousel-->

     <section>

         <div class="container">
             <div class="row">
                 <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="card">
                         <div class="card-body"><i class="bi bi-calendar3 text-center"></i>
                             <h5 class="card-title">Book appointment</h5>
                             <p class="card-text">Schedule an appointment<br>
                                 with our experienced<br>
                                 doctord.</p>

                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="card">
                         <div class="card-body"><i class="bi bi-person-walking"></i>
                             <h5 class="card-title">Pregnancy Tracker</h5>
                             <p class="card-text">Track your pregnancy<br>
                                 week by week and get<br>
                                 timely reminders.</p>

                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="card">
                         <div class="card-body"><i class="bi bi-bus-front"></i>
                             <h5 class="card-title">Emergency Care</h5>
                             <p class="card-text">24*7 emergency support<br>
                                 for you and<br>
                                 your baby.</p>


                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="card">
                         <div class="card-body"><i class="bi bi-file-earmark-text"></i>
                             <h5 class="card-title">Health Records</h5>
                             <p class="card-text">Upload and manage<br>
                                 your medical reports<br>
                                 easily.</p>

                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="card">
                         <div class="card-body"><i class="bi bi-capsule-pill"></i>
                             <h5 class="card-title">Medicine Reminder</h5>
                             <p class="card-text">Get remider for your <br>
                                 medicines and<br>
                                 vitamins.</p>

                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-4 col-lg-2">
                     <div class="card">
                         <div class="card-body"><i class="bi bi-apple"></i>
                             <h5 class="card-title">Diet & Tips</h5>
                             <p class="card-text">Discover diet plans<br>
                                 health tips and yoga<br>
                                 for a heathly you.</p>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section>
         <div class="container-fluid">
             <div class="topbar p-2 rounded ms-5 me-5 mt-3 mb-3">
                 <div class="row">
                     <div class="col-2 text-end">
                         <i class="bi bi-headset fs-1" style=""></i>
                     </div>
                     <div class="col-8">
                         <h3>We Are Here For You! <br>
                             <h6>Speak to our care expert anytime.</h6>
                     </div>

                 </div>

                 <h4>
             </div>
         </div>

     </section>

     <section id="About-Us">
         <div class="container border border-danger-subtle mt-5">
             <div class="pricing-header p-3 pb-md-4 mx-auto text-center">

                 <h1 class="display-4 fw-normal text-dark">About-Us</h1>

                 <h3 class="display-4 fw-normal text-dark">Our Story and Commitment</h3>

                 <p class="fs-5 text-primary">Founded in 2005, Mother Care Hospitalhas been <br>
                     dedicated to providing compassionate, state-of-<br>
                     the-art care mothers and their families. Our <br>
                     our mission is ensure every pregnancy journey is<br>
                     safe, suppotive,and joyfull.with a team of<br>
                     over 50 specilists and advance facilities, we<br>
                     offer personalized attention at every step.
                     learn more about our values and histroy.
                 </p>
             </div>

             <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                 <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm">

                         <div class="card-body">
                             <i class="bi bi-arrow-through-heart-fill"></i>
                             <h1 class="card-title pricing-card-title">Our values</h1>
                             <p> Empathy, Excellence,and<br>
                                 integrity are our core beliefs.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm">

                         <div class="card-body">
                             <i class="bi bi-people-fill"></i>
                             <h3 class="card-title pricing-card-title">Meet the Leadership</h3>

                             <p>Profile of our<br>
                                 administrative and medical
                                 directors. </p>
                         </div>
                     </div>
                 </div>
                 <div class="col">
                     <div class="card mb-4 rounded-3 shadow-sm border-primary">

                         <div class="card-body">
                             <i class="bi bi-building-fill-add"></i>
                             <h1 class="card-title pricing-card-title">Our Facility</h1>

                             <p>Take a tour of our modern<br>
                                 birthing suites and<br>
                                 diagnostics.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!--our service -->

     <section id="Our services">
         <h1 class="text-dark text-center mt-5">OUR SERVICES: COMPREHENSIVE CARE FOR EVERY STEP.</h1>

         <!--card section-->
         <div class="container">
             <div class="row mb-2  mt-5">
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">PRENATAL CARED</strong>
                             <h3 class="mb-0 text-dark"> Comprehensive Consultations, </h3>
                             <p class="card-text mb-auto text-secondary">Experince doctors provinding<br>
                                 regular check-ups,advanced ultrasounds,and<br>
                                 personalized nutrition plans to ensure ahealthy pregnancy<br>
                                 journey for both mother and child.</p>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\7m.jpg" alt="" class="card-img" height="400"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">DELIVERY & NEONATAL CARE </strong>
                             <h3 class="mb-0 text-dark">safe & Advanced Birthing </h3>
                             <p class="card-text mb-auto text-secondary">Our state-of-the-art birthing suites<br>
                                 and expert NICU team provide
                                 round-the-clock<br> support to ensure
                                 the safest delivery experience and<br>
                                 specialized care for newborns.</p>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\8m.jpg" alt="" class="card-img" height="400"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row mb-2  mt-5">
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">POSTNATAL SUPPORT </strong>
                             <h3 class="mb-0 text-dark">Healing & Recovery </h3>
                             <p class="card-text mb-auto text-secondry">Dedicated postnatal recovery check-ups,<br>
                                 breastfeeding guidance, and emotional <br>
                                 well-being support to help you transition smoothly<br>
                                 into motherhood with confidence.</p>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\6m.jpg" alt="" class="card-img" height="300"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">PEDIATRIC HEALTH </strong>
                             <h3 class="mb-0 text-dark">Holistic Child Care </h3>
                             <p class="card-text mb-auto text-secondary">From routine well-child visits and timely<br>
                                 vaccinations to managing acute childhood illnesses, <br>
                                 we providecompassionate care to support your baby’s growth.</p><br>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\10m.jpg" alt="" class="card-img" height="300"
                                 width="300">


                         </div>
                     </div>
                 </div>
             </div>
             <div class="row mb-2  mt-5">
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">REPRODUCTIVE HEALTH </strong>
                             <h3 class="mb-0 text-dark">Expert Counseling </h3>
                             <p class="card-text mb-auto text-secondary">Confidential and expert-led consultations
                                 on family planning, fertility tracking, and <br>
                                 reproductive health services tailored<br>
                                 to your personal needs and life goals.</p>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\11m.jpg" alt="" class="card-img" height="400"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">WOMEN'S WELLNESS</strong>
                             <h3 class="mb-0 text-dark">Health & vitality</h3>
                             <p class="card-text mb-auto text-secondary">Specialized postpartum exercise programs<br>
                                 and professional pelvic floor therapy designed to
                                 improve strength, flexibility, and
                                 overall physical recovery after childbirth.</p> <br>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\1m.jpg" alt="" class="card-img" height="300"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </section>

     <!--prices-->



     <section id="contact-us">
         <div class="container border border-primary">
             <h1 class="text-dark text-center mt-5">contact-us</h1>
             <h3 class="text-dark text-center mt-2">Get in Touch- We're to support you.</h3>

             <form class="p-5">
                 <div class="row mb-3">
                     <div class="col">
                         <i class="bi bi-person-fill"></i> <label for="exampleInputEmail1"
                             class="form-labe text-secondary">Full Name</label>
                         <input type="text" class="form-control" placeholder="Enter your name"
                             aria-label="Full Name">
                     </div>

                 </div>
                 <div class="mb-3">
                     <i class="bi bi-envelope-fill"></i> <label for="exampleInputEmail1"
                         class="form-labe text-secondary">Email Address</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                         placeholder=" Enter your email ">

                 </div>

                 <div class="col-12">
                     <i class="bi bi-telephone-fill"></i> <label for="exampleInputEmail1"
                         class="form-labe text-secondary">Phone Number</label>
                     <input type="text" class="form-control" id="inputPhone Number"
                         placeholder=" Enter your phone number">
                 </div> <br>

                 <br>
                 <div class="col-md-3">
                     <label for="exampleInputEmail1" class="form-labe text-secondary">Topic</label>
                     <select id="inputState" class="form-select">
                         <option selected>Appointment</option>
                         <option>General Query</option>
                         <option>Support</option>
                         <option>feedback</option>
                     </select><br>
                 </div>
                 <div class="col-md-2">

                     <input type="text" class="form-control" id="inputZip" placeholder="Message">
                 </div>
                 <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label text-secondary" for="exampleCheck1 ">Check me out</label>


                 </div>
                 <button type="submit" class=" btn submit">Submit</button>

             </form>

     </section>
 @endsection
