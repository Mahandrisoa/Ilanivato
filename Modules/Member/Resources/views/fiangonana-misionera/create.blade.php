@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header b-b">
            <h3>Fiangonana Misionera</h3>
        </div>
        {{ Form::open( array('route' => array('fiangonana-misionera-member.store'),'files' => true)) }}
        <div class="box-body">

            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Lohateny</label>
                <div class="col-sm-10">
                    {{ Form::text('intitule', '', array('class' => 'form-control','placeholder' => '','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Sary</label>
                <div class="col-sm-10">
                    {{ Form::file('images[]', ['multiple' => 'multiple','class'=> 'form-control']) }}
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-sm primary">Soumettre</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection
@section('js')
    @parent

@endsection