@extends('layouts.master')
@section('css')
    @parent
@endsection
@section('content')
    <div class="col-md-9">
        <div>
            <ol class="breadcrumb">
                <li><a href="#">FIANGONANA LEHIBE</a></li>
                <li><a href="#">Fiombonana</a></li>
                <li class="active">Mifanampy</li>
            </ol>
        </div>
        <h2 class="title" style="margin-top: 40px;margin-bottom: 40px;">Mifanampy</h2>
        @foreach($posts as $post)
            <div class="panel t-box no-border" style="margin-bottom: 20px;">
                <div class="t-box-header light">
                    <span class="glyphicon glyphicon-one-fine-dot" aria-hidden="true"></span>
                    {{ $post->titre }}
                </div>
                <div class="t-box-body">
                    <p>
                        {{ str_limit($post->content, 350) }}
                        <b class="pull-right">{{ \Carbon\Carbon::parse($post->created_at)->format('l j F Y') }}</b>
                    </p>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    </div>
    <div class="col-md-3"></div>
@endsection