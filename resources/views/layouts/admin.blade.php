<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="16x16" type="image/png">
    <title>@yield('title') | Khualzin</title>
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-5.min.css') }}" rel="stylesheet">

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
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @yield('css-after')
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="{{ asset('images/logo-inverse-208x46.png') }}" class="img-fluid" style="height: 32px"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}" href="{{ route('admin.index') }}">
                                <span data-feather="home"></span>Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Records</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/drivers*')) ? 'active' : '' }}" href="{{ route('drivers.index') }}">
                                <img src="{{ asset('images/driver.svg') }}" style="width: 16px; height:16px"> Drivers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/vehicles*')) ? 'active' : '' }}" href="{{ route('vehicles.index') }}">
                                <img src="{{ asset('images/vehicle.svg') }}" style="width: 16px; height:16px"> Vehicles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/towns*')) ? 'active' : '' }}" href="{{ route('towns.index') }}">
                                <img src="{{ asset('images/houses.svg') }}" style="width: 16px; height:16px"> City/Town/Villages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/routes*')) ? 'active' : '' }}" href="{{ route('routes.index') }}">
                                <img src="{{ asset('images/destination.svg') }}" style="width: 16px; height:16px"> Routes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>Integrations
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>

            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-5.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    @include('sweetalert::alert')

    @yield('js-after')
</body>
</html>
