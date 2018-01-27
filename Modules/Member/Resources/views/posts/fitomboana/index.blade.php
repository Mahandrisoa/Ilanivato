@extends('member::layouts.master')
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="margin">
            <h5 class="m-b-0 _300">Fitomboana
                <div class="btn-group pull-right">
                    <a href="{{ route('fitomboana.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="m-b">
            @foreach($posts as $post)
                <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                        <span class="pull-right label text-sm">validé</span>
                        <a href="{{ route('fitomboana.show',[ 'fitomboana' => $post->id]) }}">
                            {{ $post->titre }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $links !!}
    </div>
@endsection