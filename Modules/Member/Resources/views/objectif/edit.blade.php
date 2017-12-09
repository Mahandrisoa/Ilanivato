@extends('member::layouts.master')
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
    </div>
@endsection