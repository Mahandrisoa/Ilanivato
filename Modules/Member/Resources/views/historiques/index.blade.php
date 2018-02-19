@extends('member::layouts.master')
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="box">
            <div class="box-header b-b">
                <a href="{{ route('histories.create') }}" class="btn btn-xs success pull-right">Ajouter</a>
                <h3>Historiques</h3>
            </div>
            <div class="box-divider m-a-0"></div>
            <ul class="list no-border">
                @foreach($histories as $history)
                    <li class="list-item">
                        <a class="pull-left m-r">
			                	<span class="w-40">
			                  		<img src="{{ asset('images/bible.jpg') }}" class="w-full" alt="...">
			                 	</span>
                        </a>
                        <div class="list-body clear">
                            <div class="m-y-sm pull-right">
                                <a href="{{ route('histories.edit',['history'=> $history]) }}"
                                   class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                                </a>
                                <div style="display: inline-flex;padding-top: 0">
                                    {!! Form::open(['route'=> ['histories.destroy', $history ], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-icon btn-xs">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <a href="" class="_500 text-ellipsis">{{ $history->evenement }}</a>
                            <small class="text-muted">{{ $history->date }}</small>
                        </div>
                    </li>
                @endforeach
                {{ $histories->links() }}
            </ul>
        </div>
    </div>
@endsection
