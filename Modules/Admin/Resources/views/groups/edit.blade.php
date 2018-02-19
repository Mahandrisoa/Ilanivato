@extends('admin::layouts.master')

@section('title', 'Modifier un groupe')

@section('css')
    @parent
@stop

@section('section')
    @parent
    <div class="box">
        <div class="box-header">
            <h2>Modification de "Sampana, Sampan'Asa, Fikambanana</h2>
            <small>{{$group->name}}</small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
            {{ Form::model($group, array('route' => array('groups.update', $group->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with group data --}}
            <div class="form-group row">
                {{ Form::label('name', 'Anarana fikambanana na Sampana',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-10 pull-right">
                    {{ Form::text('name', $group->name, array('class' => 'form-control','placeholder' => 'Anarana','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('name', 'Toriteny',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-10 pull-left">
                    {{ Form::checkbox('hasToriteny',true,$group->hasToriteny) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('interlude', 'Teny faneva',['class'=>'col-sm-2 form-control-label' ]) }}
                <div class="col-sm-10 pull-right">
                    {{ Form::textarea('interlude', $group->interlude, array('class' => 'form-control','placeholder' => 'Teny faneva','required' => false)) }}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 pull-right">
                    {{ Form::submit('Ajouter', array('class' => 'btn primary btn-md')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection