@extends('member::layouts.master')
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6" >
        <div class="box">
            <div class="box-header b-b">
                <h3>Vaovao samihafan'ny Sampana, Sampan'Asa ary Fikambanana</h3>
            </div>
            <div class="box-body">
                <div class="row row-sm">
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c6.jpg') }}" class="w-full"/>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c4.jpg') }}" class="w-full"/>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c5.jpg') }}" class="w-full"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @foreach($posts as $post)
            <div class="box">
                @if ($loop->first)
                    <div class="box">
                        <div class="box-header">
                            <h3>Vaovaon'ny
                                @if(Auth::user()->isAdmin())
                                    Fiangonana
                                @else
                                    {{ Auth::user()->group->name }}
                                @endif
                            </h3>
                        </div>
                    </div>
                @endif
                <div class="box-body">
                    <div class="streamline b-l m-l-md">

                        <div class="sl-item">
                            <div class="sl-content">
                                <div class="sl-date text-muted">{{ $post->created_at }}</div>
                                <div class="sl-author">
                                    <a href></a>
                                </div>
                                <div>
                                </div>
                                <p>
                                    {{ $post->content }}
                                </p>
                                <div class="box collapse m-a-0 b-a" id="reply-1">
                                    <form>
                                        <textarea class="form-control no-border" rows="3"
                                                  placeholder="Type something..."></textarea>
                                    </form>
                                    <div class="box-footer clearfix">
                                        <button class="btn btn-info pull-right btn-sm">Post</button>
                                        <ul class="nav nav-pills nav-sm">
                                            <li class="nav-item"><a class="nav-link" href><i
                                                            class="fa fa-camera text-muted"></i></a></li>
                                            <li class="nav-item"><a class="nav-link" href><i
                                                            class="fa fa-video-camera text-muted"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-tool">
                    <ul class="nav">
                        <li class="nav-item inline dropdown">
                            <a class="nav-link" data-toggle="dropdown">
                                <i class="material-icons md-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                <a class="dropdown-item" href="{{ route('posts.edit', ['post' => $post]) }}">Modifier</a>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'dropdown-item']) !!}
                                {!! Form::close() !!}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item">Partager</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection