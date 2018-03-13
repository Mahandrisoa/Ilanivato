@extends('layouts.master')
@section('css')
    @parent
@endsection
@section('content')
    <div class="col-md-9">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('fampianarana') }}">IREO FAMPIANARANA</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $fampianarana->titre }}</li>
            </ol>
        </nav>
        <h3>{{ $fampianarana->titre }}</h3>

        <div>
            <p>{{ $fampianarana->contenu }}</p>
            <div style="padding-top: 50px;padding-right:50px;">
                <audio controls="controls" preload class="w-full">
                    <source src="{{ asset('audio/fampianarana/'.$fampianarana->lien_mp3) }}" type="audio/mpeg">
                    Votre navigateur ne supporte pas l'intégration du lecteur.
                </audio>
            </div>
        </div>
    </div>
@endsection