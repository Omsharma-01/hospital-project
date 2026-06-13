@extends('layouts.app')
@section('content')
    <style>
        :root {
            --primary: #d63384;
        }

        .service-card:hover {
            transform: translateY(-10px);
            transition: .4s;
        }

        .service-icon {
            background: rgba(214, 51, 132, .1);
        }

        .service-icon i {
            color: var(--primary);
        }

        .btn-pink {
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
        }

        .btn-pink:hover {
            background: #bb2d75;
            color: #fff;
        }

        .feature-box {
            padding: 30px 20px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
            transition: .4s;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .feature-box i {
            font-size: 50px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .stats-section {
            background: linear-gradient(135deg, #d63384, #f06292);
            color: white;
        }

        .stats-section h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .stats-section p {
            font-size: 1.1rem;
        }

        .service-badge {
            background: #d63384;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
        }

        .journey-card {
            padding: 30px;
            border-radius: 20px;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
            transition: .4s;
        }

        .journey-card:hover {
            transform: translateY(-10px);
        }

        .journey-card i {
            font-size: 50px;
            color: #d63384;
            margin-bottom: 15px;
        }

        .service-hero {
            background: linear-gradient(135deg,
                    rgba(214, 51, 132, .08),
                    rgba(214, 51, 132, .02));
        }
    </style>


    <section id="services" class="py-5 bg-light">

        <div class="container">

            <div class="text-center mb-5">
                <span class="badge px-3 py-2" style="background:#f64d86;">
                    Our Services
                </span>

                <h2 class="fw-bold mt-3">
                    Comprehensive Care For Every Step
                </h2>

                <p class="text-muted mx-auto" style="max-width:700px;">
                    From pregnancy planning to postnatal recovery, our specialists
                    provide complete healthcare services for mothers, babies, and families.
                </p>
            </div>

            <div class="row g-4">

                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="service-icon">

                                <img src="{{ asset('Assest/image/2.jpeg') }}" alt="Pregnancy Care" class="img-fluid"
                                    style="width: 100%;">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>

                            <h4 class="mt-4">Prenatal Care</h4>

                            <p class="text-muted">
                                Regular checkups, ultrasounds, nutrition guidance,
                                and personalized pregnancy monitoring.
                            </p>

                            <a href="#" class="btn btn-outline-pink">
                                Learn More
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="service-icon">
                                <img src="Assest/image/2m.jpg" alt="Delivery Care" class="img-fluid" style="width: 100%;">
                                <i class="bi bi-hospital-fill"></i>

                            </div>

                            <h4 class="mt-4">Delivery Care</h4>

                            <p class="text-muted">
                                Advanced birthing suites and expert medical support
                                for safe deliveries.
                            </p>

                            <a href="#" class="btn btn-outline-pink">
                                Learn More
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="service-icon">
                                <i class="bi bi-heart"></i>
                            </div>

                            <h4 class="mt-4">Postnatal Support</h4>

                            <p class="text-muted">
                                Recovery programs, breastfeeding support,
                                and emotional wellness care.
                            </p>

                            <a href="#" class="btn btn-outline-pink">
                                Learn More
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="service-icon">
                                <i class="bi bi-bandaid-fill "></i>
                            </div>

                            <h4 class="mt-4">Pediatric Care</h4>

                            <p class="text-muted">
                                Vaccinations, routine health checks,
                                and specialized child healthcare.
                            </p>

                            <a href="#" class="btn btn-outline-pink">
                                Learn More
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="service-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>

                            <h4 class="mt-4">Reproductive Health</h4>

                            <p class="text-muted">
                                Family planning, fertility consultations,
                                and reproductive healthcare services.
                            </p>

                            <a href="#" class="btn btn-outline-pink">
                                Learn More
                            </a>

                        </div>

                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="service-icon">
                                <i class="bi bi-person-hearts"></i>
                            </div>

                            <h4 class="mt-4">Women's Wellness</h4>

                            <p class="text-muted">
                                Exercise programs, pelvic floor therapy,
                                and overall health improvement.
                            </p>

                            <a href="#" class="btn btn-outline-pink">
                                Learn More
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <h1 class="text-dark text-center mt-5">OUR SERVICES: COMPREHENSIVE CARE FOR EVERY STEP.</h1>

    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="badge bg-danger-subtle text-dark px-3 py-2">
                    Why Choose Us
                </span>

                <h2 class="fw-bold mt-3">
                    Dedicated Care for Mothers & Babies
                </h2>

                <p class="text-muted">
                    We provide compassionate, expert-led healthcare services designed
                    to support women throughout pregnancy, childbirth, and beyond.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="bi bi-heart-pulse-fill"></i>
                        <h5>Expert Specialists</h5>
                        <p>
                            Highly qualified gynecologists, obstetricians,
                            and pediatricians.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="bi bi-hospital-fill"></i>
                        <h5>Modern Facilities</h5>
                        <p>
                            Advanced diagnostic tools and state-of-the-art
                            maternity suites.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="bi bi-shield-check"></i>
                        <h5>Safe Delivery</h5>
                        <p>
                            Comprehensive safety protocols and emergency
                            care services.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="bi bi-clock-history"></i>
                        <h5>24/7 Support</h5>
                        <p>
                            Round-the-clock medical assistance for mothers
                            and newborns.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="py-5 stats-section">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-3">
                    <h1 class="counter" data-target="15000">0</h1>
                    <p>Healthy Deliveries</p>
                </div>

                <div class="col-md-3">
                    <h1 class="counter" data-target="50">0</h1>
                    <p>Medical Specialists</p>
                </div>

                <div class="col-md-3">
                    <h1 class="counter" data-target="20">0</h1>
                    <p>Years Experience</p>
                </div>

                <div class="col-md-3">
                    <h1 class="counter" data-target="98">0</h1>
                    <p>Patient Satisfaction</p>
                </div>

            </div>

        </div>

    </section>
@endsection
