@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Tafika Masina
                <div class="btn-group pull-right">
                    <a href="{{ route('fitomboana.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <div class="panel box no-border m-b-xs">
                <div class="box-header p-y-sm">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                        {{ $post->titre }}
                    </a>
                </div>
                <div id="c_1" class="collapse in">
                    <div class="box-body">
                        <p class="text-sm text-muted">
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection