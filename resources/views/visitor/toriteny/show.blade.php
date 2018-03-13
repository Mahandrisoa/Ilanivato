@extends('layouts.master')
@section('css')
    @parent
@endsection

@section('news')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>TORITENY NY {{ date('d m Y', strtotime($toriteny->date)) }}</h3>
            <div>
                <p>{{ $toriteny->content }}</p>
                <span>
                    {{ $toriteny->author }}
                </span>
            </div>

            <div style="padding-top: 50px;padding-right:50px;">
                <audio controls="controls" preload class="w-full">
                    <source src="{{ asset('audio/toriteny/'. $toriteny->audio) }}" type="audio/mpeg">
                    Votre navigateur ne supporte pas l'intégration du lecteur.
                </audio>
            </div>
        </div>
        <div class="col-md-4">
            <h3>IREO TORITENY HAFA</h3>
        </div>
    </div>
@endsection
@section('js')
    @parent
@endsection