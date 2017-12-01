@extends('admin::layouts.master')

@section('title', 'Modifier un responsable')

@section('css')
    @parent
@stop

@section('section')
    @parent
    <div class="box">
        <div class="box-header">
            <h2>Modification de "Mpiandraikitra Sampana, Sampan'Asa, Fikambanana</h2>
            <small>{{$user->name}}</small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}
            <div class="form-group row">
                {{ Form::label('name', 'Anarana',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-8 pull-right">
                    {{ Form::text('name', $user->name , array('class' => 'form-control','placeholder' => 'Anarana','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('email', 'Email',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-8 pull-right">
                    {{ Form::email('email', $user->email, array('class' => 'form-control','placeholder' => 'Adresse e-mail','required' => true)) }}
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
                    {{ Form::submit('Confirmer', array('class' => 'btn primary btn-md')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection