@extends('admin::layouts.master')

@section('title', 'Créer un groupe')

@section('css')
    @parent
@stop

@section('section')
    @parent
    <div class="box">
        <div class="box-header">
            <h2>Ajout de "Sampana, Sampan'Asa, Fikambanana</h2>
            <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
            {{ Form::open(array('route' => array('groups.store'))) }}
            <div class="form-group row">
                {{ Form::label('name', 'Anarana fikambanana na Sampana',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-8 pull-right">
                    {{ Form::text('name', '', array('class' => 'form-control','placeholder' => 'Anarana','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('interlude', 'Teny faneva',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-8 pull-right">
                    {{ Form::textarea('interlude', null , array('class' => 'form-control','placeholder' => 'Teny faneva','required' => false)) }}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-8 pull-right">
                    {{ Form::submit('Ajouter', array('class' => 'btn primary btn-md')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection