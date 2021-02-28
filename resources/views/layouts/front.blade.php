<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Vanjava</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <!-- Owl Stylesheets -->
        <link href="{{ asset('assets/vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/owlcarousel/assets/owl.theme.default.min.css') }}"  rel="stylesheet">
        <!-- Data AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Animate -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            }
            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
            }
        </style>
        <!-- Custom styles for this template -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <nav class="navstyle navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="blog.html">All Categories</a>
                            <a class="dropdown-item" href="#">Laravel</a>
                            <a class="dropdown-item" href="#">Software Testing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Repositories</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pages">
                            <a class="dropdown-item" href="blog.html">Privacy Policy</a>
                            <a class="dropdown-item" href="#">Disclaimer</a>
                            <a class="dropdown-item" href="#">Term & Conditions</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="followUs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Follow Us
                        </a>
                        <div class="dropdown-menu social-links text-center" aria-labelledby="followUs">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </li>
                </ul>
                <div class="col-md-4 search-form">
                    <form action="#" method="GET">
                        <input type="text" name="query" id="typing">
                        <button type="submit"><i class="icofont-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        @yield('content')
        <!-- ======= Footer ======= -->
        <footer id="footer" class="container">
            <div class="d-md-flex py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; 2021 - Vanjava • All rights reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <a href="#" class="back-to-top" style="text-decoration: none;"><i class="icofont-rocket"></i></a>
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/vendor/typewriter.js') }}"></script>
        <!-- Data AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script>
            new TypeWriter('#typing', ['Mau cari apa.... ??', 'Ketikkan sesuatu disini...', 'Misal; Katalon Studio'], { writeDelay: 100 });
        </script>
        <!-- Template Main JS File -->
        <script src="{{ asset('assets/main.js') }}"></script>

        @stack('scripts')
    </body>
</html>