@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">FAMPIANARANA
                <div class="btn-group pull-right">
                    <a href="{{ route('fampianarana-member.create') }}">
                        <button type="button" class="btn btn-sm primary">Nouveau</button>
                    </a>
                </div>
            </h5>

        </div>
        <div class="panel box no-border m-b-xs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('fampianarana-member.index') }}">FAMPIANARANA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $f->titre }}</li>
                </ol>
            </nav>
            <div class="box-header">
                <h2 class="text-centers" style="padding-left:auto;padding-right:auto;">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">{{ $f->titre }}
                    </a>
                </h2>
                <div id="c_1" class="collapse in">
                    <div class="box-body">
                        <p class="text-sm text-muted">
                            {{ $f->contenu }}
                        </p>
                        <div style="padding-top: 50px;padding-right:50px;">
                            <audio controls="controls" preload class="w-full">
                                <source src="{{ asset('audio/fampianarana/'.$f->lien_mp3) }}" type="audio/mpeg">
                                Votre navigateur ne supporte pas l'intégration du lecteur.
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
