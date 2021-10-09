<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    @yield('styles')
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ URL::asset('stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('stylesheets/theme-custom.css') }}" />

    <!-- Head Libs -->
    <script src="{{ URL::asset('vendor/modernizr/modernizr.js') }}"></script>
</head>
<body>
    <!-- start: header -->
    @include('layouts.partial.header')
    <!-- end: header -->
    <div class="inner-wrapper">
        <!-- start: sidebar -->
        @include('layouts.partial.sidebar-left')
        <!-- end: sidebar -->
        <!-- start: content -->
        @yield('content')
        <!-- end: content -->
    </div>
    @include('layouts.partial.sidebar-right')
    <!-- Vendor -->
    <script src="{{ URL::asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    @yield('script')

    <!-- Theme Base, Components and Settings -->
    <script src="{{ URL::asset('javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ URL::asset('javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ URL::asset('javascripts/theme.init.js') }}"></script>
</body>
</html>
