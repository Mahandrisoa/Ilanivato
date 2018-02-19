@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header b-b">
            <a href="{{ route('calendars.create') }}" class="btn btn-xs success pull-right">Ajouter</a>
            <h3>Calendrier</h3>
        </div>
        <div class="box-divider m-a-0"></div>
        <ul class="list no-border">
            @foreach($calendars as $calendar)
                <li class="list-item">
                    <a class="pull-left m-r">
			                	<span class="w-40">
			                  		<img src="{{ asset('images/bible.jpg') }}" class="w-full" alt="...">
			                 	</span>
                    </a>
                    <div class="list-body clear">
                        <div class="m-y-sm pull-right">
                            <a href="{{ route('calendars.edit',['calendar'=> $calendar ]) }}"
                               class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                            </a>
                            <div style="display: inline-flex;padding-top: 0">
                                {!! Form::open(['route'=> ['calendars.destroy', $calendar], 'method' => 'DELETE']) !!}
                                <button type="submit" class="btn btn-icon btn-xs">
                                    <i class="fa fa-remove"></i>
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <a href="" class="_500 text-ellipsis">{{ $calendar->event }}</a>
                        <small class="text-muted">{{ $calendar->date }}</small>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
