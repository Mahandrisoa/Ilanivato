@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
@endsection
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="box">
            <div class="box-header b-b">
                <h3>Vaovao samihafan'ny Sampana, Sampan'Asa ary Fikambanana</h3>
            </div>
            <div class="box-body">
                <div class="row row-sm">
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c6.jpg') }}" class="w-full"/>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c4.jpg') }}" class="w-full"/>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c5.jpg') }}" class="w-full"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <a href="{{ route('calendars.create') }}" class="btn btn-xs success pull-right">Ajouter</a>
                <h3>Calendrier {{ $calendar->date }}</h3>
            </div>
            <div class="box-body">
                <div>
                    {{ Form::model($calendar, array('route' => array('calendars.update', $calendar), 'method' => 'PUT')) }}
                    <div class="form-group row">
                        <label class="col-sm-8 form-control-label">Date</label>
                        <div class="col-sm-4 has-feedback">
                            <input type="text" name="date" id="single_cal" class="form-control has-feedback-left">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Evènement</label>
                        <div class="col-sm-10">
                            <input type="text" name="event" class="form-control" placeholder="Evènement"
                                   value="{{ $calendar->event }}">
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
    </div>
@endsection
@section('js')
    @parent
    <script type="application/javascript" src="{{ asset('js/scripts/moment.min.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/scripts/daterangepicker.js') }}"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            var today = '{{ $calendar->date }}',
                    dateArray = today.split('-'),
                    fDate = dateArray.reverse().join('-');
            $('#single_cal').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_2",
                startDate: fDate,
                locale: {
                    format : 'DD/MM/YYYY'
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
@endsection