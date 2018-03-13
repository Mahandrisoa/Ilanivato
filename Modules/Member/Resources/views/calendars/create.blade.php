@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header b-b">
            <h3>Calendrier</h3>
        </div>
        <div class="box-body">
            {{ Form::open(array('route' => 'calendars.store')) }}
            <div class="form-group row">
                <label class="col-sm-8 form-control-label">Date</label>
                <div class="col-sm-4 has-feedback">
                    <input type="text" name="date" id="single_cal" class="form-control has-feedback-left">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Evènement</label>
                <div class="col-sm-10">
                    <textarea name="event" rows="2" class="form-control">
                        </textarea>
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
    <script type="application/javascript" src="{{ asset('assets/moment.min.js') }}"></script>
    <script type="application/javascript" src="{{ asset('assets/daterangepicker.js') }}"></script>
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