@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/daterangepicker/daterangepicker.css') }}">
@show
@section('section_center')
    <div class="row-col box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Toriteny</h5>
        </div>
        <div class="box-body">
            {{ Form::model($toriteny, array('route' => array('toriteny-member.update', $toriteny), 'method' => 'PUT')) }}
            {{ csrf_field() }}
            {{ Form::hidden('group_id',$toriteny->group_id) }}
            <div class="form-group row">
                <label class="col-sm-8 form-control-label">Date</label>
                <div class="col-sm-4 has-feedback">
                    <input type="text" name="date" id="single_cal" class="form-control has-feedback-left">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 form-control-label">Auteur</label>
                <div class="col-sm-10 pull-right">
                    {{ Form::text('author',$toriteny->author,array('class' => 'form-control','required' => true)) }}
                </div>
            </div>
            <div class="form-group row">
                <label>Contenu</label>
                {{ Form::textarea('content',$toriteny->content, array('class' => 'form-control','rows'=> 10,'placeholder' => '','required' => true,'id'=>'editor')) }}
            </div>
            <div class="form-group row">
                <label for="change-audio">
                    Hanova toriteny mp3
                </label>
                <input type="checkbox" id="change-audio" name="change-audio" class="change-audio">
            </div>
            <div class="form-group row audio-container">
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
    <script type="application/javascript" src="{{ asset('assets/moment.min.js') }}"></script>
    <script type="application/javascript" src="{{ asset('assets/daterangepicker/daterangepicker.js') }}"></script>
    <script type="application/javascript">
        $(function () {
            var today = '{{ $toriteny->date }}',
                    dateArray = today.split('-'),
                    fDate = dateArray.reverse().join('-');
            $('#single_cal').daterangepicker({
                singleDatePicker: true,
                singleClasses: "picker_2",
                startDate: fDate,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });

            $('.change-audio').on('change',function (e) {
                var val = $(this).val();
                console.log(val);
                if (val) {
                    $('.audio-container').addClass('show');
                } else {
                    $('.audio-container').addClass('show');
                }
            });
        });
    </script>

@endsection