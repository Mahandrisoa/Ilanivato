@extends('member::layouts.master')
@section('section_center')
    <div class="row-col box">
        <div class="box-header">
            <h5 class="m-b-0 _300">
                Fiombonana
            </h5>
        </div>
        <div class="box-body">
            {{ Form::model($post, array('route' => array('fiombonana.update', $post), 'method' => 'PUT')) }}
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Lohateny</label>
                <div class="col-sm-10">
                    {{ Form::text('titre', $post->titre, array('class' => 'form-control','placeholder' => '','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Sokajy</label>
                <div class="col-sm-10">
                    {{ Form::select('type_post_id', $types ,$post->type_post_id,['class' => 'form-control c-select'])  }}
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 form-control-label">Sehatra afaka hifampiresahana</label>
                <div class="col-sm-10 checkbox">
                    {{ Form::checkbox('hasPosts', null,$post->hasPosts) }}
                </div>
            </div>
            <div class="form-group">
                <label>Votoantony</label>
                {{ Form::textarea('content', $post->content , array('class' => 'form-control','rows'=> 10,'placeholder' => '','required' => true)) }}
            </div>
            <button type="submit" class="btn btn-info">Soumettre</button>
            {{ Form::close() }}
        </div>
    </div>
@endsection