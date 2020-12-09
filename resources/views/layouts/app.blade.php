<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="16x16" type="image/png">

    <title>@yield('title') | Khualzin</title>
    <link href="{{ asset('css/bootstrap-5.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />--}}
    @yield('styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
<div class="app flex-row align-items-center">
    <div class="container">
        @yield("content")
    </div>
</div>
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-5.bundle.min.js') }}"></script>
@yield('scripts')
</body>

</html>
