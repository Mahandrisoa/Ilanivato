@extends('layouts.master')
@section('css')
    @parent
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-8 row">
            <div class="col-sm-4">
                <img src="{{ asset('images/pasteur.jpg') }}" class="w-full" alt="pasteur">
            </div>
            <div class="col-sm-8">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum."
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </div>
        </div>
        <div class="col-sm-4 edito">
            @foreach($tts as $t)
                <div class="panel t-box no-border">
                    <div class="t-box-header light">
                        <span class="glyphicon glyphicon-one-fine-dot" aria-hidden="true"></span>
                        {{ \Carbon\Carbon::parse($t->date)->format('l j F Y') }}
                    </div>
                    <div class="t-box-body">
                        {{ str_limit($t->content, 200) }}
                        @if( strlen($t->content) > 200 )
                            <a href="{{ route('toriteny.show',array('toriteny' => $t->id)) }}"
                               class="text-success">Suite</a>
                        @endif
                    </div>
                </div>
            @endforeach
            <div class="text-right text-center-xs">
                {{ $tts->links() }}
            </div>
        </div>
    </div>
    <div class="row">
        <h4>
            IREO VAOVAO
        </h4>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 250px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="la.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="ny.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script>
        $(function () {

        });
    </script>
@endsection