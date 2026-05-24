 @extends('layouts.app')
 @section('content')
     <h1>test</h1>
<!-- Carousel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="Assest/image/om.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Compassionate Care</h5>
        <p>For You & Your Baby</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="Assest/image/om.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Compassionate Care</h5>
        <p>For You & Your Baby</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Assest/image/om.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h5>Compassionate Care</h5>
        <p>For You & Your Baby</p>
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

     <section id="Our services">
         <h1 class="text-white text-center mt-5">Our services</h1>


         <!--card section-->
         <div class="container">
             <div class="row mb-2  mt-5">
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">Welcome to the coding </strong>
                             <h3 class="mb-0 text-white">Lets being the coding journery </h3>
                             <p class="card-text mb-auto text-light">This is a wider card with supporting text below as a
                                 natural
                                 lead-in to additional content.</p> <a href="#"
                                 class="icon-link gap-1 icon-link-hover stretched-link">
                                 Continue reading
                                 <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#chevron-right"></use>
                                 </svg> </a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\6.jpeg" alt="" class="bd-placeholder-img" height="300"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">Welcome to the coding </strong>
                             <h3 class="mb-0 text-white">Lets being the coding journery </h3>
                             <p class="card-text mb-auto text-light">This is a wider card with supporting text below as a
                                 natural
                                 lead-in to additional content.</p> <a href="#"
                                 class="icon-link gap-1 icon-link-hover stretched-link">
                                 Continue reading
                                 <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#chevron-right"></use>
                                 </svg> </a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\5.jpeg" alt="" class="bd-placeholder-img" height="300"
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
                                 class="d-inline-block mb-2 text-warning">Welcome to the coding </strong>
                             <h3 class="mb-0 text-white">Lets being the coding journery </h3>
                             <p class="card-text mb-auto text-light">This is a wider card with supporting text below as a
                                 natural
                                 lead-in to additional content.</p> <a href="#"
                                 class="icon-link gap-1 icon-link-hover stretched-link">
                                 Continue reading
                                 <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#chevron-right"></use>
                                 </svg> </a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\3.jpeg" alt="" class="bd-placeholder-img" height="300"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">Welcome to the coding </strong>
                             <h3 class="mb-0 text-white">Lets being the coding journery </h3>
                             <p class="card-text mb-auto text-light">This is a wider card with supporting text below as a
                                 natural
                                 lead-in to additional content.</p> <a href="#"
                                 class="icon-link gap-1 icon-link-hover stretched-link">
                                 Continue reading
                                 <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#chevron-right"></use>
                                 </svg> </a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\3.jpeg" alt="" class="bd-placeholder-img" height="300"
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
                                 class="d-inline-block mb-2 text-warning">Welcome to the coding </strong>
                             <h3 class="mb-0 text-white">Lets being the coding journery </h3>
                             <p class="card-text mb-auto text-light">This is a wider card with supporting text below as a
                                 natural
                                 lead-in to additional content.</p> <a href="#"
                                 class="icon-link gap-1 icon-link-hover stretched-link">
                                 Continue reading
                                 <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#chevron-right"></use>
                                 </svg> </a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\3.jpeg" alt="" class="bd-placeholder-img" height="300"
                                 width="300">

                             </svg>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div
                         class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                         <div class="col p-4 d-flex flex-column position-static"> <strong
                                 class="d-inline-block mb-2 text-warning">Welcome to the coding </strong>
                             <h3 class="mb-0 text-white">Lets being the coding journery </h3>
                             <p class="card-text mb-auto text-light">This is a wider card with supporting text below as a
                                 natural
                                 lead-in to additional content.</p> <a href="#"
                                 class="icon-link gap-1 icon-link-hover stretched-link">
                                 Continue reading
                                 <svg class="bi" aria-hidden="true">
                                     <use xlink:href="#chevron-right"></use>
                                 </svg> </a>
                         </div>
                         <div class="col-auto d-none d-lg-block">
                             <img src="Assest\image\3.jpeg" alt="" class="bd-placeholder-img" height="300"
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
             <h1 class="text-white text-center mt-5">contact-us</h1>
             <form class="p-5">
                 <div class="row mb-3">
                     <div class="col">
                         <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                     </div>
                     <div class="col">
                         <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                     </div>
                 </div>
                 <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-labe text-white">Email address</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                         placeholder="enter email">
                     <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.
                     </div>
                 </div>

                 <div class="col-12">
                     <label for="inputAddress" class="form-label text-white">Address</label>
                     <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                 </div>
                 <div class="col-12">
                     <label for="inputAddress2" class="form-label text-white">Address 2</label>
                     <input type="text" class="form-control" id="inputAddress2"
                         placeholder="Apartment, studio, or floor">
                 </div>
                 <div class="col-md-3">
                     <label for="inputCity" class="form-label text-white">City</label>
                     <input type="text" class="form-control" id="inputCity">
                 </div>
                 <div class="col-md-3">
                     <label for="inputState" class="form-label text-white">State</label>
                     <select id="inputState" class="form-select">
                         <option selected>Choose...</option>
                         <option>...</option>
                     </select>
                 </div>
                 <div class="col-md-2">
                     <label for="inputZip" class="form-label  text-white">Zip</label>
                     <input type="text" class="form-control" id="inputZip">
                 </div>
                 <div class="mb-3 form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label text-white" for="exampleCheck1 ">Check me out</label>
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>
         </div>
     </section>
 @endsection
