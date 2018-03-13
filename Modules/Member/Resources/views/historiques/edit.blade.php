@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header b-b">
            <h3>Hanova tantara</h3>
        </div>
        <div class="box-body">
            <div>
                {{ Form::model($history, array('route' => array('histories.update', $history), 'method' => 'PUT','files' => true)) }}
                <div class="form-group row">
                    <label class="col-sm-8 form-control-label">Date</label>
                    <div class="col-sm-4 has-feedback">
                        <input type="number" min="1878" name="date" id="single_cal" class="form-control has-feedback-left" value="{{ $history->date }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Evènement</label>
                    <div class="col-sm-10">
                        <textarea name="evenement" rows="17" class="form-control">
                        {{ $history->evenement }}
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Sary</label>
                    <div class="col-sm-10">
                        {{ Form::file('images[]', ['multiple' => 'multiple','class'=> 'form-control']) }}
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
    </div>
@endsection
@section('js')
    @parent
    {{--<script type="application/javascript" src="{{ asset('js/scripts/moment.min.js') }}"></script>--}}
    {{--<script type="application/javascript" src="{{ asset('js/scripts/daterangepicker.js') }}"></script>--}}
    {{--<script type="application/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--var today = '{{ $history->date }}',--}}
                    {{--dateArray = today.split('-'),--}}
                    {{--fDate = dateArray.reverse().join('-');--}}
            {{--$('#single_cal').daterangepicker({--}}
                {{--singleDatePicker: true,--}}
                {{--singleClasses: "picker_2",--}}
                {{--startDate: fDate,--}}
                {{--locale: {--}}
                    {{--format: 'DD/MM/YYYY'--}}
                {{--}--}}
            {{--}, function (start, end, label) {--}}
                {{--console.log(start.toISOString(), end.toISOString(), label);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@endsection