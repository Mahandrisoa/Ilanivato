@extends('admin::layouts.master')
@section('title', 'Liste des responsables')
@section('css')
    @parent
@stop
@section('section')
    @parent
    <div class="box">
        <div class="box-header">
            <h3>Lisitry mpiandraikitry ny Sampana,Sampan'Asa ary Fikambanana</h3>
        </div>
        <div class="row p-a">
            <div class="col-sm-5">
                <a href="{{ route('users.create') }}" class="btn primary btn-xs">
                    Ajouter
                    <i class="fa fa-plus-square pull-right"></i>
                </a>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                {{--<div class="input-group input-group-sm">--}}
                    {{--<input type="text" class="form-control" placeholder="Rechercher..">--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t">
                <thead>
                    <th>Email</th>
                    <th>Anarana</th>
                    <th>Sampana</th>
                    <th>Ho atao</th>
                </thead>
                <tbody>
                @foreach($users as $u)
                    <tr>
                        <td class="text-ellipsis">{{ $u->email }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->group->name }}</td>
                        <td style="display: inline-flex;padding-top: 0">
                            <a href="{{ route('users.edit',['id'=>$u->id]) }}" class="btn btn-icon btn-xs white">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $u->id]]) !!}
                            <button type="submit" class="btn btn-icon btn-xs red-800">
                                <i class="fa fa-remove"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <footer class="dker p-a">

        </footer>
    </div>
@endsection

@section('js')
    @parent
@stop

