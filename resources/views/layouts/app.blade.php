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
</head>

<body>

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
                            +91 98765 43210
                        </span>

                        <span>
                            <i class="bi bi-envelope-fill me-1"></i>
                            info@mothercarehospital.com
                        </span>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="d-flex justify-content-lg-end align-items-center gap-3 mt-2 mt-lg-0">

                        <a href="#" class="text-white text-decoration-none">
                            <i class="bi bi-person-circle"></i>
                            Login / Register
                        </a>

                        <a href="/appointment" class="btn btn-light btn-sm px-4 rounded-pill fw-semibold">
                            <i class="bi bi-calendar-check-fill"></i>
                            Book Appointment
                        </a>

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
                        <a class="nav-link active" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/service">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/doctor">
                            Doctors
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/appointment">
                            Appointment
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pregnancy-guide">
                            Pregnancy Guide
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">
                            Contact
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a href="/appointment" class="btn appointment-btn rounded-pill px-4">
                            Book Now
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
                            <a href="/about" class="text-decoration-none text-dark">
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

                    <p class="mb-2">
                        📍 Mother Care Hospital
                    </p>

                    <p class="mb-2">
                        📞 +91 9876543210
                    </p>

                    <p class="mb-2">
                        ✉ info@mothercarehospital.com
                    </p>

                    <div class="mt-3">
                        <a href="#" class="btn btn-outline-danger btn-sm rounded-circle me-2">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="btn btn-outline-danger btn-sm rounded-circle me-2">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                            <i class="bi bi-youtube"></i>
                        </a>
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
</body>

</html>
