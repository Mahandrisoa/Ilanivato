<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Styles -->
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/animate.css/animate.min.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/glyphicons/glyphicons.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/material-design-icons/material-design-icons.css') }}"
              type="text/css"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css"/>
        <!-- build:css ../assets/styles/app.min.css -->
        <link rel="stylesheet" href="{{ asset('css/styles/app.css') }}" type="text/css"/>
        <!-- endbuild -->
        <link rel="stylesheet" href="{{ asset('css/fonts/roboto/font.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('assets/toast/toastr.min.css') }}" type="text/css"/>
        <style>

        </style>
    @show
</head>
<body>
<div class="app" id="app">
    <div id="content" class="app-content box-shadow-z0" role="main">
        @include('layouts.partials._header')
        <div ui-view class="app-body" id="view">
            <div class="padding">
                <div class="row">
                    @section('content')
                        @include('layouts.partials._flash_messages')
                        @include('layouts.partials._errors')
                    @show
                </div>
                <!-- end of content -->
                @include('layouts.partials._footer')
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
@section('js')
    <script src="{{ asset('assets/laroute.js') }}"></script>
    <script src="{{ asset('assets/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('assets/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/scripts/ui-nav.js') }}"></script>
    <script src="{{ asset('assets/toast/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/pusher/pusher.min.js') }}"></script>
@show
</body>
</html>
