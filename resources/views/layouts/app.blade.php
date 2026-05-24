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

    <link rel="stylesheet" href="Assest/style/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <section>
        <div class="topbar p-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex gap-4  align-items-center">
                            <h5>
                                <i class="bi bi-clock-fill"></i> Emergency
                            </h5>
                            <h5>
                                <i class="bi bi-telephone-fill"></i> +9198765 43210
                            </h5>
                            <h5>
                                <i class="bi bi-envelope-fill"></i> info@mothercarehospital.com
                            </h5>

                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end gap-5  align-items-center">
                            <h5 class="mt-1">
                                <i class="bi bi-person-fill"></i> Login/Register
                            </h5>
                            <button type="button" class="btn btn-sm bookapp"><i class="fas fa-calendar-alt"></i> Book
                                Appointment</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--navbar creation-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
            <img src="Assest/image/logo2.png" alt="logo" class="img-fluid" style="width: 210px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i
                                class="bi bi-house-door-fill"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#Our services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#contact-us">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#contact-us">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#contact-us">Pregancy guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#contact-us">Contact Us</a>
                    </li>
                </ul>
                </li>
            </div>
        </div>
    </nav>




    @yield('content')


    <!--Footer-->

    <footer class="py-5 text-center text-body-secondary bg-dark mt-5">
        <p class="text-white">Blog template built for <a href="https://getbootstrap.com/">Coding Monkey</a> by <a
                href="https://x.com/mdo">superhero@mdo</a>.</p>
        <p class="mb-0"> <a href="#">Back to top</a> </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
