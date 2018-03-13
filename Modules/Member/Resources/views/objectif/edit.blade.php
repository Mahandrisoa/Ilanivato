@extends('member::layouts.master')
@section('section_center')
    <div class="box b-b">
        <div class="box-header">
            <h3>TANJON'NY :
                @if(Auth::user()->isAdmin())
                    Fiangonana
                @else
                    {{ Auth::user()->group->name }}
                @endif
            </h3>
        </div>
        <div class="box-body">
            <div>
                {{ Form::model($objectif, array('route' => array('objectifs.update', $objectif), 'method' => 'PUT')) }}
                <div>
                <textarea name="intitule" class="form-control" rows="3"
                          placeholder="Vaovaon'ny Sampana (à publier) ...">{{ $objectif->intitule }}</textarea>
                    <div class="box-footer clearfix">
                        <button type="submit" class="btn pull-right btn-sm amber-500"
                                style="color:rgba(255, 255, 255, 0.87);">Modifier
                        </button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection