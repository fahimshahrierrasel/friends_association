<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP_NAME', "Friend's Association") }}</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Highlight-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navigation-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    @yield('additional_css')
</head>
<body>
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Friend's Association</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link{{ Request::is("/") ? " active" : "" }}"
                                                                href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false" href="#">Services</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">First Item</a>
                            <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                            <a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a
                                class="nav-link{{ Request::is("/about-us") ? " active" : "" }}"
                                href="{{ url('/about-us') }}">About Us</a></li>
                    <li class="nav-item" role="presentation"><a
                                class="nav-link{{ Request::is("/contact-us") ? " active" : "" }}"
                                href="{{ url('/contact-us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@yield('content')
<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                                class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-instagram"></i></a>
                    <p class="copyright">{{ config('APP_NAME', "Friend's Association") }} © {{ date('Y') }}</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
@yield('additional_js')
</body>

</html>