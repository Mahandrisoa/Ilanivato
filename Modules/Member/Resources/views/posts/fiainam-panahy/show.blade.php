@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Fiainam-panahy
                <div class="btn-group pull-right">
                    <a href="{{ route('fiainam-panahy.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
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
                @foreach($post->images() as $image)
                    <img src="{{ $image->image_path }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
@endsection