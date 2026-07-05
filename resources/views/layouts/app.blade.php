<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mother Care Hospital</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('Assest/style/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

</head>

<body>

    <style>
        .social {
            margin-top: 30px;
        }

        .social a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #f64d86;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin-right: 10px;
            transition: .3s;
        }

        .social a:hover {
            background: #ffffff;
            color: #fff;
            transform: translateY(-5px);
        }

        .footer-contact .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #3a3a3a;
            font-size: 15px;
        }

        .footer-contact .contact-item i {
            width: 38px;
            height: 38px;
            background: rgba(246, 77, 134, 0.15);
            color: #f64d86;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            transition: 0.3s;
        }

        .footer-contact .contact-item:hover i {
            background: #f64d86;
            color: #fff;
            transform: scale(1.1);
        }

        .footer-contact a {
            color: #ffffff;
            text-decoration: none;
            transition: 0.3s;
        }

        .contact-item a {
            color: #3a3a3a;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-contact a:hover {
            color: #f64d86;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .user-panel {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff;
            font-weight: 600;
        }

        .user-info i {
            font-size: 24px;
            color: #fff;
        }

        .dashboard-btn {
            background: #f64d86;
            color: #fff;
            padding: 8px 18px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: .3s;
        }

        .dashboard-btn:hover {
            background: #ff6b9c;
            color: #fff;
            transform: translateY(-2px);
        }

        .logout-btn {
            background: #fff;
            color: #f64d86;
            padding: 8px 18px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: .3s;
        }

        .logout-btn:hover {
            background: #f64d86;
            color: #fff;
        }

        .login-btn {
            background: #f64d86;
            color: #fff;
            padding: 10px 22px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: .3s;
        }

        .login-btn:hover {
            background: #ff6b9c;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(246, 77, 134, .35);
        }
    </style>
    <!-- Top Header -->
    <div class="topbar py-2">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <div class="d-flex flex-wrap gap-4 text-white">

                        <span>
                            <i class="bi bi-clock-fill me-1"></i>
                            24/7 Emergency Support
                        </span>

                        <span>
                            <i class="bi bi-telephone-fill me-1"></i>
                            +91 8409573224
                        </span>

                        <span>
                            <i class="bi bi-envelope-fill me-1"></i>
                            info@mothercarehospital.com
                        </span>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="d-flex justify-content-lg-end align-items-center gap-3 mt-2 mt-lg-0">


                        {{-- @if (Auth::check())
                            <a href="{{ url('logout') }}" class="text-white text-decoration-none">Logout</a>
                            <h6 class="text-white mb-0">{{ Auth::user()->name }}</h6>
                            <i class="bi bi-person-circle"></i>
                        @else
                            <a href="{{ url('login') }}" class="text-white text-decoration-none">Login</a>
                            <i class="bi bi-person-circle"></i>
                        @endif


                        {{-- <a href="/appointment" class="btn btn-light btn-sm px-4 rounded-pill fw-semibold">
                            <i class="bi bi-calendar-check-fill"></i>
                            Book Appointment
                        </a> --}}
                        @if (Auth::check())
                            <div class="user-panel">

                                <div class="user-info">
                                    <i class="bi bi-person-circle"></i>
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                                @if (Auth::user()->role === 'patient')
                                    <a href="/patient/dashboard" class="dashboard-btn text-capitalize">
                                        <i class="bi bi-speedometer2"></i>
                                        {{ Auth::user()->role }} Dashboard
                                    </a>
                                @else
                                    <a href="/admin/dashboard" class="dashboard-btn text-capitalize">
                                        <i class="bi bi-speedometer2"></i>
                                        {{ Auth::user()->role }} Dashboard
                                    </a>
                                @endif


                                <a href="{{ url('logout') }}" class="logout-btn">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Logout
                                </a>

                            </div>
                        @else
                            <a href="{{ url('login') }}" class="login-btn">
                                <i class="bi bi-person-fill"></i>
                                Login
                            </a>
                        @endif
                    </div>

                </div>

            </div>

        </div>
    </div>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">

        <div class="container">

            <a class="navbar-brand" href="/">
                <img src="{{ asset('Assest/image/logo2.png') }}" alt="Mother Care Hospital" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarContent">

                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="/about-us">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('service') ? 'active' : '' }}" href="/service">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('doctor') ? 'active' : '' }}" href="/doctor">
                            Doctors
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('appointment') ? 'active' : '' }}" href="/appointment">
                            Appointment
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pregnancy-guide') ? 'active' : '' }}"
                            href="/pregnancy-guide">
                            Pregnancy Guide
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">
                            Contact
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('ambulance') ? 'active' : '' }}" href="/ambulance">
                            Ambulance
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('hospital') ? 'active' : '' }}" href="/hospital">
                            Hospital
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>



    @yield('content')


    <!--Footer-->
    <footer class="bg-white border-top mt-5">
        <div class="container py-5">
            <div class="row g-4">

                <!-- About -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="fw-bold" style="color:#f64d86;">
                        Mother Care Hospital
                    </h4>

                    <p class="text-muted mt-3">
                        We provide expert pregnancy care, maternity services,
                        doctor consultations, and personalized guidance to ensure
                        a healthy journey for every mother and baby.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="fw-semibold mb-3">Quick Links</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/" class="text-decoration-none text-dark">
                                Home
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="/about-us" class="text-decoration-none text-dark">
                                About Us
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="/service" class="text-decoration-none text-dark">
                                Services
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="/doctor" class="text-decoration-none text-dark">
                                Doctors
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="/appointment" class="text-decoration-none text-dark">
                                Appointment
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Pregnancy Guide -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-semibold mb-3">Pregnancy Guide</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">Prenatal Care</li>
                        <li class="mb-2">Healthy Nutrition</li>
                        <li class="mb-2">Safe Exercise</li>
                        <li class="mb-2">Stress Management</li>
                        <li class="mb-2">Vaccination Tips</li>
                        <li class="mb-2">Labor Preparation</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-semibold mb-3">Contact Us</h5>

                    <div class="footer-contact">

                        <div class="contact-item mb-3">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Mother Care Hospital, Hazaribagh, Jharkhand</span>
                        </div>

                        <div class="contact-item mb-3">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+918084888699">+91 80848 88699</a>
                        </div>

                        <div class="contact-item mb-3">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@mothercarehospital.com">
                                info@mothercarehospital.com
                            </a>
                        </div>

                        <div class="contact-item mb-4">
                            <i class="fas fa-clock"></i>
                            <span>24×7 Emergency Care Available</span>
                        </div>

                        <div class="social">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <a href="#" class="social-icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Footer -->
        <div style="background:#f64d86;">
            <div class="container py-3">
                <div class="row align-items-center">

                    <div class="col-md-6 text-center text-md-start">
                        <small class="text-white">
                            © 2026 Mother Care Hospital. All Rights Reserved.
                        </small>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="text-white text-decoration-none">
                            Back to Top ↑
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
