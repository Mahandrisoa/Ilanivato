@extends('member::layouts.master')
@section('section_center')

    <div class="box">
        <div class="box-header b-b">
            <a href="{{ route('vaovao-member.create') }}" class="btn btn-xs success pull-right">Ajouter</a>
            <h3>Vaovaom-piangonana</h3>
        </div>
        <div class="box-body">
            <ul class="list no-border">
                @foreach($vaovao as $v)
                    <li class="list-item">
                        <a class="pull-left m-r">
                            <i class="material-icons">book</i>
                        </a>
                        <div class="list-body clear">
                            <div class="m-y-sm pull-right">
                                <a href="{{ route('vaovao-member.edit',['vaovao_member'=> $v]) }}"
                                   class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                                </a>
                                <div style="display: inline-flex;padding-top: 0">
                                    {!! Form::open(['route'=> ['vaovao-member.destroy', $v], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-icon btn-xs">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <a href="" class="_500 text-ellipsis">{{ $v->information}}</a>
                            <small class="text-muted">{{ $v->date }}</small>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection