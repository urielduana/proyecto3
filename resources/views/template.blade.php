<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libreria</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Libreria Pro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Books
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                            <li><a class="dropdown-item" href="{{ route('book.index') }}">Check</a></li>
                            <li><a class="dropdown-item" href="{{ route('book.create') }}">Register</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Customers
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                            <li><a class="dropdown-item" href="{{ route('customer.index') }}">Check</a></li>
                            <li><a class="dropdown-item" href="{{ route('customer.create') }}">Register</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dinamic Content-->
    @yield('content')



    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container bg-dark mw-100" >
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Biblioteca Pro
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                            <p><a class="text-white">MDBootstrap</a></p>
                            <p><a class="text-white">MDWordPress</a></p>
                            <p><a class="text-white">BrandFlow</a></p>
                            <p><a class="text-white">Bootstrap Angular</a></p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful links
                            </h6>
                            <p>
                                <a class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a class="text-white">Help</a>
                            </p>
                        </div>

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-3">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <!-- Copyright -->
                            <div class="p-3">
                                <strong>© 2022 Biblioteca Pro Company, Inc | </strong>
                                <?php echo date('d-m-y h:i:s'); ?>
                            </div>
                            <!-- Copyright -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                </section>
                <!-- Section: Copyright -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
