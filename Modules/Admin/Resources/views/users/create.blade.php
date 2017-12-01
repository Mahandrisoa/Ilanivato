@extends('admin::layouts.master')

@section('title', 'Créer un responsable')

@section('css')
    @parent
@stop

@section('section')
    @parent
    <div class="box">
        <div class="box-header">
            <h2>Ajout de "Mpiandraikitra Sampana, Sampan'Asa, Fikambanana</h2>
            <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
            {{ Form::open(array('route' => array('users.store'))) }}
                <div class="form-group row">
                    {{ Form::label('name', 'Anarana',['class'=>'col-sm-2 form-control-label' ]) }}
                    <div class="col-sm-8 pull-right">
                        {{ Form::text('name', '', array('class' => 'form-control','placeholder' => 'Anarana','required' => true)) }}
                    </div>
                </div>
            <div class="form-group row">
                {{ Form::label('email', 'Email',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-8 pull-right">
                    {{ Form::email('email', '', array('class' => 'form-control','placeholder' => 'Adresse e-mail','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('group', 'Sampana/Samapan\'asa/Fikambanana',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-8 pull-right">
                    {{ Form::select('group_id', $groups,null,['class' => 'form-control'])  }}
                </div>
            </div>
                <div class="form-group row">
                    {{ Form::label('password', 'Teny miafina',['class'=>'col-sm-2 form-control-label' ]) }}
                    <div class="col-sm-8 pull-right">
                        {{ Form::password('password', array('class' => 'form-control','required' => true)) }}
                    </div>
                </div>
                <div class="form-group row">
                    {{ Form::label('password', 'Teny miafina (*fanamarinana)',['class'=>'col-sm-2 form-control-label' ]) }}
                    <div class="col-sm-8 pull-right">
                        {{ Form::password('password_confirmation', array('class' => 'form-control','required' => true)) }}
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