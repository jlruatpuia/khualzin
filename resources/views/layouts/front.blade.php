<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <!-- Site Title-->
        <title>Home</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}" sizes="180x180">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="16x16" type="image/png">
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/front.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
		<!--[if lt IE 10]>
        <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
            <a href="http://windows.microsoft.com/en-US/internet-explorer/">
                <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
        </div>
        <script src="js/html5shiv.min.js"> </script>
		<![endif]-->
    </head>
    <body>
    <!-- Page-->
        <div class="page">
      {{-- <a class="section section-banner text-center d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )"><img src="images/banner/foreground-04-1600x60.png" srcset="images/banner/foreground-04-1600x60.png 1x, images/banner/foreground-04-3200x120.png 2x" alt="" width="1600" height="310"></a> --}}
      <!-- Page Header-->
        <header class="section page-header">
        <!-- RD Navbar-->
            <div class="rd-navbar-wrap rd-navbar-corporate">
                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static"
                data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px"
                data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true"
                data-lg-stick-up="true" data-xl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">
                      <span></span>
                    </div>
                    <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
                        <div class="rd-navbar-top-panel-inner">
                            <ul class="list-inline">
                                <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                                    <ul class="list-comma">
                                        <li><a href="tel:#">1-800-1234-567</a></li>
                                        <li><a href="tel:#">1-800-6780-345</a></li>
                                    </ul>
                                </li>
                                <li class="box-inline list-inline-item">
                                    <span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span>
                                    <a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a>
                                </li>
                                <li class="box-inline list-inline-item">
                                    <span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span>
                                    <a href="mailto:#">mail@demolink.org</a>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="rd-navbar-top-panel-inner">
                            <a class="button button-sm button-secondary button-nina" href="https://www.templatemonster.com/website-templates/62466.html" target="_blank">buy template now</a>
                        </div>
                    </div>
                    <div class="rd-navbar-inner">
                  <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <a class="brand-name" href="/">
                                    <img class="logo-default" src="{{ asset('images/logo-default-208x46.png') }}" alt="" width="208" height="46"/>
                                    <img class="logo-inverse" src="{{ asset('images/logo-inverse-208x46.png') }}" alt="" width="208" height="46"/>
                                </a>
                            </div>
                        </div>
                        <div class="rd-navbar-aside-center">
                            <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </div>
                        </div>
                    <div class="rd-navbar-aside-right">
                        @if(Route::has('login'))
                            @auth
                                <a class="button button-sm button-secondary button-nina" href="#">Book a tour now</a>
                            @else
                                <a class="btn button-sm button-secondary" href="{{ route('login') }}">Login</a>
                                @if(Route::has('register'))
                                    <a class="button button-sm button-secondary" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        @endif

                    </div>
                </div>
            </nav>
        </div>
        </header>

        @yield('content')
      <!-- Footer Minimal-->
        <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
            <div class="container container-wide">
                <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
                    <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left">
                        <a href="/">
                            <img class="inverse-logo" src="{{ asset('images/logo-inverse-208x46.png') }}" alt="" width="208" height="46"/>
                        </a>
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-4">
                        <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></p>
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
                        <ul class="group-xs group-middle">
                            <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google" href="#"></a></li>
                            <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- coded by barber-->
    @include('sweetalert::alert')

    </body>
</html>
