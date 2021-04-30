<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}" />
    @yield('additonal-styles')
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="navbar-brand">
                <img src="frontend/images/logo_nomads@2x.png" alt="Logo Nomads" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle 
            id=" navbardrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>
                </ul>

                <!-- Mobile Button -->
                <form action="#" class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login btn-login my-2 my-sm-0">Login</button>
                </form>

                <!-- Desktop Button -->
                <form action="#" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-desktop btn-navbar-right my-2 my-sm-0 px-4">Login</button>
                </form>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Footer -->
    <hr>
    <footer>
        <div class="container">
            <div class="row justify-content-center text-left">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-head">
                        <h4>FEATURES</h4>
                    </div>
                    <div class="footer-content">
                        <p>Reviews</p>
                        <p>Community</p>
                        <p>Social Media Kit</p>
                        <p>Affiliate</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-head">
                        <h4>Account</h4>
                    </div>
                    <div class="footer-content">
                        <p>Refund</p>
                        <p>Security</p>
                        <p>Rewards</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-head">
                        <h4>Company</h4>
                    </div>
                    <div class="footer-content">
                        <p>Career</p>
                        <p>Help Center</p>
                        <p>Media</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-head">
                        <h4>Get Connected</h4>
                    </div>
                    <div class="footer-content">
                        <p>Jawa Barat</p>
                        <p>Indonesia</p>
                        <p>0813-8393-2663</p>
                        <p>support@nomads.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <hr>

    <!-- Copyright -->
    <div class="text-center">
        <div class="container">
            2021 Copyright Nomads • All rights reserved • Made in Depok
        </div>
    </div>

    <script src="{{ url('frontend/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
    @yield('addtional-scripts')
</body>

</html>
