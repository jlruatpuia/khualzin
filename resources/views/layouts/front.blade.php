<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <!-- Site Title-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sports Events</title>

        <!-- FAVICON -->
        <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
        <!-- PLUGINS CSS STYLE -->
    <!-- <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet"> -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-slider.css') }}">
        <!-- Font Awesome -->
        <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="{{ asset('plugins/slick-carousel/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet">
        <!-- Fancy Box -->
        <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
        <!-- CUSTOM CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    </head>
    <body class="body-wrapper">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light navigation">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('images/logo-default-208x46.png') }}" style="height: 32px">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto mt-10">
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link login-button" href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white add-button" href="{{ route('register') }}">Register</a>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                               role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                                <li><a class="dropdown-item" href="#">Travel History</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        @yield('content')
        <footer class="footer-bottom">
            <!-- Container Start -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>Copyright © <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)
                                </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <!-- Social Icons -->
                        <ul class="social-media-icons text-right">
                            <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
                            <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
                            <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
                            <li><a class="fa fa-vimeo" href=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Container End -->
            <!-- To Top -->
            <div class="top-to">
                <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
            </div>
        </footer>
    <!-- JAVASCRIPTS -->
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-5.bundle.min.js') }}"></script>
    <!-- tether js -->
    <script src="{{ asset('plugins/tether/js/tether.min.js') }}"></script>
    <script src="{{ asset('plugins/raty/jquery.raty-fa.js') }}"></script>
    <script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
    <!-- google map -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            window._token = $('meta[name="csrf-token"]').attr('content')

            moment.updateLocale('en', {
                week: {dow: 1} // Monday is the first day of the week
            })

            $('.date').datetimepicker({
                format: 'DD-MM-YYYY',
                locale: 'en',
                icons: {
                    up: 'fas fa-chevron-up',
                    down: 'fas fa-chevron-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right'
                }
            })
        })
    </script>
    <!-- coded by barber-->
    @include('sweetalert::alert')

    </body>
</html>
