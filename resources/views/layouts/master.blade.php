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
    @yield('css')
</head>
<body>
<a id="skippy" class="sr-only sr-only-focusable" href="#content">
    <div class="container"><span class="skiplink-text">Skip to main content</span></div>
</a>
<header id="top" role="banner">
    <div class="banner h-full">
        <a href="{{route('login')}}" class="btn btn-xs btn-yellow pull-right light">
            @auth
            Espace administration
            @else
                Se connecter
                @endauth
        </a>
        <h1 class="light titre">FJKM ILANIVATO MISIONERA</h1>
        <p class="light sous-titre">Fiangonana Lehibe sy Mitory</p>
    </div>
    <img src="{{ asset('images/fjkm.png') }}" alt="Fjkm">
    <div class="news">
        <ul>
        </ul>
    </div>
</header>
<div class="app-nav">
    <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="{{route('pejy-voalohany')}}" class="navbar-brand text-yellow">PEJY VOALOHANY</a>
            </li>
            <li class="dropdown">
                <a href="{{route('fg-lehibe')}}" id="fg-lehibe" data-toggle="dropdown">FIANGONANA LEHIBE</a>
            </li>
            <li class="active">
                <a href="{{route('fg-mitory')}}" id="fg-mitory">FIANGONANA MITORY</a>
            </li>
            <li>
                <a href="{{route('zadi')}}" id="zadi">AKANY ZADI</a>
            </li>
            <li>
                <a href="{{route('fg-ssaf')}}" id="ssaf">SSAF</a>
            </li>
            <li>
                <a href="{{route('fg-about')}}">MOMBA NY FIANGONANA</a>
            </li>
        </ul>
    </nav>
</div>
<div class="w-full drop-content hidden">
    <div class="row">
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <h4>
                FIANGONANA LEHIBE
            </h4>
            "Mandra-pahatongantsika rehetra ho amin’ ny firaisan’ ny finoana sy ny fahalalana tsara ny Zanak’
            Andriamanitra, ka ho lehilahy lehibe, mahatratra ny ohatry ny halehiben’ ny fahafenoan’ i Kristy".
            <i>Efesiana 4:13</i>
        </div>
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>FIAINAM-PANAHY</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('fahateraham-baovao') }}">Fahateraham-baovao</a></li>
                    <li><a href="{{ route('velona-sy-miaina') }}">Fiainam-panahy velona sy miaina</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>FITOMBOANA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('soratra-masina') }}">Soratra Masina</a></li>
                    <li><a href="{{ route('fiainam-bavaka') }}">Fiainam-bavaka</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>FIOMBONANA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('miaraka') }}">Miaraka</a></li>
                    <li><a href="{{ route('mifampiresaka') }}">Mifampiresaka</a></li>
                    <li><a href="{{ route('mifankahita') }}">Mifankahita</a></li>
                    <li><a href="{{ route('mifanampy') }}">Mifanampy</a></li>
                    <li><a href="{{ route('miara-miasa') }}">Miara-miasa</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="w-full drop-content hidden">
    <div class="row">
        <div class="col-md-4 h-full" style="border-left: 2px solid #C7C2BC;">
            <h4>
                FIANGONANA MITORY
            </h4>
            "Ary hoy Izy taminy: Mandehana any amin’ izao tontolo izao hianareo, ka mitoria ny filazantsara amin’ ny
            olombelona rehetra"
            <i>Marka 16: 15</i>
        </div>
        <div class="col-md-4 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>TAFIKA MASINA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('fiofanana') }}">Fiofanana</a></li>
                    <li><a href="{{ route('fanatanterahana') }}">Fanatanterahana</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>FIHEVERANA NY MAHA OLONA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('asa-sosialy') }}">Asa sosialy</a></li>
                    <li><a href="{{ route('asa-vavolombelona') }}">Asa vavolombelona</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="w-full drop-content hidden">
    <div class="row">
        <div class="col-md-4 h-full">
            <div class="title">
                <h5>AKANY ZANA-DILOILO</h5>
            </div>
        </div>
    </div>
</div>
<div class="w-full drop-content hidden">
    <div class="row">
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <h4>
                SAMPANA sy SAMPANA'ASA ary FIKAMBANANA
            </h4>
        </div>
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>SAMPANA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('sekoly-alahady') }}">Sekoly alahady</a></li>
                    <li><a href="{{ route('slk') }}">Lehilahy Kristianina</a></li>
                    <li><a href="{{ route('stk') }}">Tanora Kristianina</a></li>
                    <li><a href="{{ route('svm') }}">Vokovoko manga</a></li>
                    <li><a href="{{ route('vfl') }}">Vondrona Fototra Laika</a></li>
                    <li><a href="{{ route('sampati') }}">Mpanazava sy Tily</a></li>
                    <li><a href="{{ route('dorkasy') }}">Dorkasy</a></li>
                    <li><a href="{{ route('fifohazana') }}">Fifohazana</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>SAMPANAN'ASA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('sekoly') }}">SEKOLY</a></li>
                    <li><a href="{{ route('asa-lazara') }}">Asa Lazara</a></li>
                    <li><a href="{{ route('aff') }}">Asa Fitoriana ny Filazantsara</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 h-full" style="border-left: 2px solid #C7C2BC;">
            <div class="title">
                <h5>FIKAMBANANA</h5>
            </div>
            <div class="content">
                <ul>
                    <li><a href="{{ route('fifa') }}">Fahatanjahantena</a></li>
                    <li><a href="{{ route('diakona-sy-loholona') }}">Diakona sy Loholona</a></li>
                    <li><a href="{{ route('gafli') }}">GAFLI</a></li>
                    <li><a href="{{ route('mpitoriteny-sy-katekista') }}">Mpitoriteny sy Katekista</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="app-body ">
    <div class="container">
        @yield('content')
    </div>
</section>
<footer class="" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel footer-box no-border">
                    <div class="footer-box-header">
                        <h4>FIANGONANA MISIONERA</h4>
                        <div class="footer-box-line"></div>
                    </div>
                    <div class="row footer-box-body">
                        <div class="col-sm-4 h-full">
                            <img src="{{ asset('images/eglise.png') }}" class="w-full" alt="pasteur">
                        </div>
                        <div class="col-sm-8 h-full">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            <br>
                            <a href="{{ route('fiangonana-misionera') }}"
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
                            <img src="{{ asset('images/study-bible.jpg') }}" class="w-full" alt="pasteur">
                        </div>
                        <div class="col-sm-8 h-full">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            <br>
                            <a href="{{ route('fampianarana') }}"
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
                            <img src="{{ asset('images/bible-2.png') }}" class="w-full" alt="pasteur">
                        </div>
                        <div class="col-sm-8 h-full">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            <br>
                            <a href="{{ route('mfha') }}"
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


<script type="text/javascript" src="{{ asset('assets/laroute.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/moment.fr.js') }}"></script>
<script>
    $(function () {

        var drops = $('.drop-content');

        drops.mouseleave(function () {
            $(this).addClass('hidden');
        });
        /**
         *  fgLehibe
         * */
        $('#fg-lehibe').mouseover(function (e) {
            $(drops[0]).removeClass('hidden');
        });
        $('#fg-lehibe').mouseleave(function (e) {
            if (!$(e.relatedTarget).parents().hasClass('drop-content')) {
                $(drops[0]).addClass('hidden');
            }
        });

        /**
         * fgMitory
         */
        $('#fg-mitory').mouseover(function (e) {
            $(drops[1]).removeClass('hidden');
        });
        $('#fg-mitory').mouseleave(function (e) {
            if (!$(e.relatedTarget).parents().hasClass('drop-content')) {
                $(drops[1]).addClass('hidden');
            }
        });

        /**
         * ssaf
         */
        $('#ssaf').mouseover(function (e) {
            $(drops[3]).removeClass('hidden');
        });
        $('#ssaf').mouseleave(function (e) {
            if (!$(e.relatedTarget).parents().hasClass('drop-content')) {
                $(drops[3]).addClass('hidden');
            }
        });

        /**
         * Calendars
         */
        var calendars = [];
        var options = {
            url: "/calendars"
        }
        var begin = 0;
        var end = 4;
        var news = '.news>ul';
        $.ajax(options)
                .success(function (response) {
                    calendars = response;
                    var temp = slice(calendars);
                    render(temp, news);
                })
                .error(function (err) {
                    console.warn(err);
                });

        setInterval(function () {
            var temp = slice(calendars);
            render(temp, news);
        }, 10000);

        function slice(tab) {
            var temp = tab.slice(begin, end);
            if (tab.slice(begin, end).length == 0) {
                temp = tab.slice(end);
                begin = 0;
                end = 4;
            } else {
                begin = end;
            }
            return temp;
        }


        function render(data, target) {
            var content = '';
            $.each(data, function (index, obj) {
                var date = moment(obj.date);
                date = date.locale('fr').format('LL');
                content += '' +
                        '<li class="animated fadeInRightBig">' +
                        '<div class="text-yellow">' + date +
                        '</div>' +
                        '<div class="light">' + obj.event +
                        '</div>' +
                        '</li>';
            });
            $(target).html(content);
        }
    });
</script>
@yield('js')
</body>
</html>