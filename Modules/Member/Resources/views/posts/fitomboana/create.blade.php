@extends('member::layouts.master')
@section('section_center')
    <div class="row-col box">
        <div class="box-header">
            <h5 class="m-b-0 _300">
                Fitomboana
            </h5>
        </div>
        <div class="box-body">
            {{ Form::open( array('route' => array('fitomboana.store'),'files' => true)) }}
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Lohateny</label>
                <div class="col-sm-10">
                    {{ Form::text('titre', '', array('class' => 'form-control','placeholder' => '','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Sokajy</label>
                <div class="col-sm-10">
                    {{ Form::select('type_post_id', $types ,null,['class' => 'form-control c-select'])  }}
                </div>
            </div>
            <div class="form-group">
                <label>Votoantony</label>
                {{ Form::textarea('content', null , array('class' => 'form-control','rows'=> 10,'placeholder' => '','required' => true)) }}
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Sary</label>
                <div class="col-sm-10">
                    {{ Form::file('images[]', ['multiple' => 'multiple','class'=> 'form-control']) }}
                </div>
            </div>
            <button type="submit" class="btn btn-info">Soumettre</button>
            {{ Form::close() }}
        </div>
    </div>
@endsection