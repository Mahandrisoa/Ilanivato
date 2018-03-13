@extends('member::layouts.master')
@section('section_center')

    <div class="box">
        <div class="box-header b-b">
            <a href="{{ route('objectifs.create') }}" class="btn btn-xs success pull-right">Ajouter</a>
            <h3>Tanjona</h3>
        </div>
        <div class="box-body">
            <ul class="list no-border">
                @foreach($objectifs as $objectif)
                    <li class="list-item">
                        <a class="pull-left m-r">
			                	<span class="w-40">
			                  		<img src="{{ asset('images/bible.jpg') }}" class="w-full" alt="...">
			                 	</span>
                        </a>
                        <div class="list-body clear">
                            <div class="m-y-sm pull-right">
                                <a href="{{ route('objectifs.edit',['objectif'=> $objectif]) }}"
                                   class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                                </a>
                                <div style="display: inline-flex;padding-top: 0">
                                    {!! Form::open(['route'=> ['objectifs.destroy', $objectif], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-icon btn-xs">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <a href="" class="_500 text-ellipsis">{{ $objectif->intitule }}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection