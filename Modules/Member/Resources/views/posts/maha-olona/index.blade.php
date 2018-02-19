@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Fiheverana ny maha-olona
                <div class="btn-group pull-right">
                    <a href="{{ route('maha-olona.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <div class="m-b">
                @foreach($posts as $post)
                    <div class="panel box no-border m-b-xs">
                        <div class="box-header p-y-sm">
                            <span class="pull-right label text-sm">validé</span>
                            <a href="{{ route('maha-olona.show',[ 'fitomboana' => $post->id]) }}">
                                {{ $post->titre }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $links !!}
        </div>
    </div>
@endsection