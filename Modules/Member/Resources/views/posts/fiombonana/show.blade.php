@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Fiombonana
                <div class="btn-group pull-right">
                    <a href="{{ route('fiainam-panahy.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="panel box no-border m-b-xs">
            <div class="box-header p-y-sm">
                <span class="pull-right label text-sm">3214</span>
                <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                    {{ $post->titre }}
                </a>
            </div>
            <div id="c_1" class="collapse in">
                <div class="box-body">
                    <p class="text-sm text-muted"><span class="text-md pull-left w-32 m-r rounded success">A</span>
                        {{ $post->content }}
                    </p>
                </div>
                <div class="">
                    @foreach($post->comments as $comment)
                        <div class="sl-item">
                            <div class="sl-content">
                                <p>{{ $comment->content }}</p>
                                <div class="sl-date text-muted pull-right">{{ $comment->updated_at }}</div>
                            </div>
                        </div>
                        <div class="box-divider"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection