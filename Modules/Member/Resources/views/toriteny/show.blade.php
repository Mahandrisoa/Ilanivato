@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Toriteny
                <div class="btn-group pull-right">
                    <a href="{{ route('fiainam-panahy.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <div class="panel box no-border m-b-xs">
                <div class="box-header p-y-sm">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                        Toriteny ny : {{ $toriteny->date }}
                    </a>
                </div>
                <div id="c_1" class="collapse in">
                    <div class="box-body">
                        <p class="text-sm text-muted">
                            {{ $toriteny->content }}
                        </p>
                        <p class="">{{ $toriteny->author }}</p>
                    </div>
                </div>
                <audio controls="controls" preload class="w-full">
                    <source src="{{ asset('audio/toriteny/'. $toriteny->audio) }}" type="audio/mpeg">
                    Votre navigateur ne supporte pas l'intégration du lecteur.
                </audio>
            </div>
        </div>
    </div>
@endsection