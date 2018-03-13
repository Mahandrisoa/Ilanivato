@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/prettify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
@show
@section('section_center')
    <div class="row-col box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Toriteny</h5>
        </div>
        <div class="box-body">
            {{ Form::open( array('route' => 'toriteny-member.store','files'=>true )) }}
            {{ csrf_field() }}
            {{ Form::hidden('group_id',$group_id) }}
            <div class="form-group row">
                <label class="col-sm-8 form-control-label">Daty</label>
                <div class="col-sm-4 has-feedback">
                    <input type="text" name="date" id="single_cal" class="form-control has-feedback-left">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 form-control-label">Mpanoratra</label>
                <div class="col-sm-10 pull-right">
                    {{ Form::text('author','',array('class' => 'form-control','required' => true,'autocomplete' => false )) }}
                </div>
            </div>
            <div class="form-group row">
                <label>Contenu</label>
                {{ Form::textarea('content', null , array('class' => 'form-control','rows'=> 10,'placeholder' => '','required' => true,'id'=>'editor')) }}
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Audio</label>
                <div class="col-sm-10">
                    <div class="form-file">
                        {!! Form::file('audio', array('class' => 'form-control','required'=> true)) !!}
                        <button class="btn white">Safidio ny version audio ...</button>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    {{ Form::submit('Valider', array('class' => 'btn pull-right btn-sm amber-500')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script type="application/javascript" src="{{ asset('js/scripts/moment.min.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/scripts/daterangepicker.js') }}"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $('#single_cal').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_2",
                locale: {
                    format: 'DD/MM/YYYY'
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>

@endsection