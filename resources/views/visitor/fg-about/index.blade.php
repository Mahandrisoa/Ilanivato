@extends('layouts.master')
@section('css')
    @parent
    <style>
        .accordion {
            background-color: #E9C35E;
            color: white !important;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .accordion.active, .accordion:hover {
            background-color: #c5940f;
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .accordion.active:after {
            content: "\2212";
        }

        .panel-about {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            margin-bottom: 0px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <h3>MOMBA NY FIANGONANA</h3>
        <div class="col-md-12">
            <button class="accordion">Ny tantaran'ny fiangonana</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                @foreach($histories as $history)
                    <div class="row">
                        <div class="col-sm-2"><b>{{ $history->date }} : </b></div>
                        <div class="col-sm-10">
                            <p>{{ $history->evenement }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="accordion">Ireo mpitandriana nifandimby</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                    <a href="{{asset('uploads/documents/pasteurs.pdf')}}" class="btn btn-default btn-xs">Hijery</a>
                </p>
            </div>
            <button class="accordion">Ireo Sampana sy Sampan'Asa ary Fikambanana</button>
            <div class="panel-about">
                <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                    beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                    probably haven't heard of them accusamus labore sustainable VHS.
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <h4>Sampana</h4>
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

                    <div class="col-md-4">
                        <h4>Sampan'asa</h4>
                        <ul>
                            <li><a href="{{ route('sekoly') }}">SEKOLY</a></li>
                            <li><a href="{{ route('asa-lazara') }}">Asa Lazara</a></li>
                            <li><a href="{{ route('aff') }}">Asa Fitoriana ny Filazantsara</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Fikambanana</h4>
                        <ul>
                            <li><a href="{{ route('fifa') }}">Fahatanjahantena</a></li>
                            <li><a href="{{ route('diakona-sy-loholona') }}">Diakona sy Loholona</a></li>
                            <li><a href="{{ route('gafli') }}">GAFLI</a></li>
                            <li><a href="{{ route('mpitoriteny-sy-katekista') }}">Mpitoriteny sy Katekista</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="accordion">
                Ireo biraom-piangonana
            </button>
            <div class="panel-about">
                <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                    beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                    probably haven't heard of them accusamus labore sustainable VHS.
                </p>
                <div class="row">
                    <div class="col-sm-4"><b>Ny Filoha : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->president->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpitan-tsoratry ny fivoriana : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->secretaire->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpitan-tsoratry ny vola : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->comptable->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpitahiry vola : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->tresorier->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpanolo-tsaina : </b></div>
                    <div class="col-sm-8">
                        @foreach($group->conseillers as $conseiller)
                            <p>{{ $conseiller->name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection