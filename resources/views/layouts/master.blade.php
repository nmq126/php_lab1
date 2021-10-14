<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.partial.styles')

    <!-- Specific Page Vendor CSS -->
    @yield('page-styles')
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
{{--    @include('layouts.partial.sidebar-right')--}}
    @include('layouts.partial.script')

    <!-- Specific Page Vendor -->
    @yield('page-script')

    <!-- Theme Base, Components and Settings -->
    <script src="{{ URL::asset('javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ URL::asset('javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ URL::asset('javascripts/theme.init.js') }}"></script>

    @yield('page-script-2')

</body>
</html>
