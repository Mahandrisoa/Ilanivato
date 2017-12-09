@extends('member::layouts.master')
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
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
        <div class="box">
            {{ Form::model($post, array('route' => array('posts.update', $post ), 'method' => 'PUT')) }}
            <div>
                <textarea name="content" class="form-control no-border" rows="3"
                          placeholder="Vaovaon'ny Sampana (à publier) ...">{{ $post->content }}</textarea>
                <div class="box-footer clearfix">
                    <button type="submit" class="btn pull-right btn-sm amber-500"
                            style="color:rgba(255, 255, 255, 0.87);">Publier
                    </button>
                    <ul class="nav nav-pills nav-sm">
                        <li class="nav-item"><a class="nav-link" href><i class="fa fa-book text-muted"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href><i class="fa fa-camera text-muted"></i></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href><i class="fa fa-video-camera text-muted"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection