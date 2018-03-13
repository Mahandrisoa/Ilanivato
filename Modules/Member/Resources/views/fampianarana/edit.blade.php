@extends('member::layouts.master')
@section('section_center')
    <div class="row-col box">
        <div class="box-header">
            <h5 class="m-b-0 _300">
                <a href="{{ route('fampianarana-member.index') }}">HANOVA FAMPIANARANA</a>
            </h5>
        </div>
        <div class="box-body">
            {{ Form::model($f, array('route' => array('fampianarana-member.update', $f), 'method' => 'PUT')) }}
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Lohateny</label>
                <div class="col-sm-10">
                    {{ Form::text('titre', $f->titre, array('class' => 'form-control','placeholder' => '','required' => true)) }}
                </div>
            </div>
            <div class="form-group">
                <label>Votoantony</label>
                {{ Form::textarea('contenu', $f->contenu , array('class' => 'form-control','rows'=> 10,'placeholder' => '','required' => true)) }}
            </div>
            <div class="form-group">
                <label for="">Lien Youtube</label>
                {{ Form::text('lien_youtube',$f->lien_youtube,array('class'=>'form-control','placeholder'=>'Lien youtube','required' => false)) }}
            </div>
            <div class="form-group">
                <label for="">Lien mp3</label>
                {{ Form::text('lien_mp3', $f->lien_mp3 ,array('class'=>'form-control','placeholder'=>'Lien MP3','required' => false)) }}
            </div>
            <button type="submit" class="btn btn-sm primary pull-right m-a-1">Soumettre</button>
            {{ Form::close() }}
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>
        $(function(){
            alert("done");
        });
    </script>
    @ensection