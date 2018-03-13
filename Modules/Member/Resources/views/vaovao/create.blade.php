@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header b-b">
            <h3>Vaovaom-piangonana</h3>
        </div>
        <div class="box-body">
            {{ Form::open( array('route' => array('vaovao-member.store'),'files' => true)) }}
            <div class="form-group row">
                <label class="col-sm-8 form-control-label">Date</label>
                <div class="col-sm-4 has-feedback">
                    <input type="text" name="date" id="single_cal" class="form-control has-feedback-left">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 form-control-label">Vaovao</label>
                <div class="col-sm-10">
                    <textarea name="information" rows="2" class="form-control">
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