@extends('layouts.master')
@section('css')
    @parent
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-8 row">
            <div class="col-sm-5">
                <img src="{{ asset('images/pasteur.jpeg') }}" class="w-full" alt="pasteur">
            </div>
            <div class="col-sm-7">
                <p>
                    « Halalao ny itoeran’ny lainao, ary aoka hohenjanina ny ambaindainao, ka aza avela hisy hiketrona, halavao ny kofehinao, ary aoreno mafy ny tsiman-dainao ; fa hiitatra any amin’ny ankavanana sy any amin’ny ankavia ianao »
                    (Isaia 54 :2-3a)
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/415496175&color=%234373e2&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=false"></iframe>
                </p>
                <p>
                    Andron’ny serasera izao andro ankehitriny izao. Tena ilaina ary ny mifampita vaovao mari-pototra sy mitondra soa ho an’ny rehetra, indrindra ho an’ny Fiangonan’ny Tompo. Ny FJKM Ilanivato Misionera  ary dia mizara ny traikefany ho fijoroany vavolombelona  “mba hahaizantsika[-nareo] mbamin’ny olona masina rehetra ny hahafantatra tsara izay sakany sy lavany ary hahavony sy halaliny, ary hahalala ny fitiavan’i Kristy, izay mihoatra noho ny fahalalana, mba hamenoana anareo ho amin’ny fahafenonan’Andriamanitra rehetra”(Efesiana 3 :18-19). Ao anatin’ny fifampizarana no ho fantatry ny fiangonana ny fahafenoan’ny Tompo, fa sady mahazo ny izaràna no mandray tombony koa ny mpizara, ho fampiorenana ny Tenan’i Kristy eto an-tany.
                </p>
                <p>Mahazoa ary izay soa  ato anatiny izay azonay omena. Dia ho aminareo ny Tompo; ary ho an’Andriamanitra irery ny voninahitra .
                </p>
                <p>
                    <span class="pull-right">
                        Ny Mpitandrina
                    FJKM Ilanivato Misionera
                    </span>
                </p>
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
    <br>
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
                    <img src="la.jpg" alt="" style="width:100%;">
                </div>

                <div class="item">
                    <img src="chicago.jpg" alt="" style="width:100%;">
                </div>

                <div class="item">
                    <img src="ny.jpg" alt="" style="width:100%;">
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