<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="{{ asset('css/animate.css/animate.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/material-design-icons/material-design-icons.css') }}"
          type="text/css"/>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/fjkm-ilanivato.css') }}" type="text/css"/>
    @section('css')
    @endsection
</head>
<body>
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container"><span class="skiplink-text">Skip to main content</span></div>
</a>
<header id="top" role="banner">
    <div class="banner h-full">
        <a href="{{route('login')}}" class="btn btn-xs btn-yellow pull-right light">Se connecter</a>
        <h1 class="light titre">FJKM ILANIVATO MISIONERA</h1>
        <p class="light sous-titre">Fiangonana Lehibe sy Misionera</p>
    </div>
    <img src="{{ asset('images/fjkm.png') }}" alt="Fjkm">
    <div class="news">
        @yield('news')
    </div>
</header>
<div class="app-nav">
    <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="{{route('pejy-voalohany')}}" class="navbar-brand text-yellow">PEJY VOALOHANY</a>
            </li>
            <li>
                <a href="{{route('fg-lehibe')}}">FIANGONANA LEHIBE</a>
            </li>
            <li class="active">
                <a href="{{route('fg-mitory')}}">FIANGONANA MITORY</a>
            </li>
            <li>
                <a href="{{route('fg-about')}}">MOMBA NY FIANGONANA</a>
            </li>
            <li>
                <a href="{{route('fg-ssaf')}}">SSAF</a>
            </li>
        </ul>
        {{--<ul class="nav navbar-nav navbar-right">--}}
            {{--<li><a href="{{route('fg-blog')}}">Blog</a></li>--}}
        {{--</ul>--}}
    </nav>
</div>
<section class="app-body">
    @yield('content')
</section>
<footer class="" role="contentinfo">
    <div class="">
        <div class="row">
            <div class="col-md-4">
                <div class="panel footer-box no-border">
                    <div class="footer-box-header">
                        <h4>FIANGONANA MISIONERA</h4>
                        <div class="footer-box-line"></div>
                    </div>
                    <div class="row footer-box-body">
                        <div class="col-sm-4 h-full">
                            <img src="{{ asset('images/pasteur.jpg') }}" class="w-full" alt="pasteur">
                        </div>
                        <div class="col-sm-8 h-full">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            <br>
                            <a href="http://localhost:8000/home/toriteny/2"
                               class="btn btn-yellow light pull-right">Lire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel footer-box no-border">
                    <div class="footer-box-header">
                        <h4>FAMPIANARANA</h4>
                        <div class="footer-box-line"></div>
                    </div>
                    <div class="row footer-box-body">
                        <div class="col-sm-4 h-full">
                            <img src="{{ asset('images/pasteur.jpg') }}" class="w-full" alt="pasteur">
                        </div>
                        <div class="col-sm-8 h-full">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            <br>
                            <a href="http://localhost:8000/home/toriteny/2"
                               class="btn btn-yellow light pull-right">Lire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel footer-box no-border">
                    <div class="footer-box-header">
                        <h4 style="flex:3;">MAHAFANTATRA FENO NY HEVITR'ANDRIAMANITRA</h4>
                        <div class="footer-box-line"></div>
                    </div>
                    <div class="row footer-box-body">
                        <div class="col-sm-4 h-full">
                            <img src="{{ asset('images/pasteur.jpg') }}" class="w-full" alt="pasteur">
                        </div>
                        <div class="col-sm-8 h-full">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            <br>
                            <a href="http://localhost:8000/home/toriteny/2"
                               class="btn btn-yellow light">Lire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <p class="text-yellow">FJKM ILANIVATO - LOT IVY 205 TER Ilanivato</p>
                <p class="text-yellow">Tél : 0 34 04 486 14 - Email : fjkm-ilanivato@ilanivato.com </p>
            </div>
        </div>
    </div>
</footer>

@section('js')
    <script src="{{ asset('js/laroute.js') }}"></script>
    <script src="{{ asset('') }}"></script>
@endsection
</body>
</html>