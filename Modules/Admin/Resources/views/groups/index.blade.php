@extends('admin::layouts.master')

@section('title', 'Liste des sections')

@section('css')
    @parent
@stop

@section('section')
    @parent
    <div class="box">
        <div class="box-header">
            <h3>Lisitry ny Sampana,Sampan'Asa ary Fikambanana</h3>
        </div>
        <div class="row p-a">
            <div class="col-sm-5">
                <a href="{{ route('groups.create') }}" class="btn primary btn-xs">
                    Ajouter
                    <i class="fa fa-plus-square pull-right"></i>
                </a>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Rechercher..">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t">
                <thead>
                <thead>
                <tr>
                    <th>Anarana</th>
                    <th >Teny faneva</th>
                    <th class="pull-right">Ho atao</th>
                </tr>
                </thead>
                </thead>

                <tbody>
                @foreach ($groups as $group)
                    <tr>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->interlude }}</td>
                        <td class="pull-right" style="display: inline-flex;">
                            <a href="{{ route('groups.edit',['id'=>$group->id]) }}" class="btn btn-icon btn-xs white">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['groups.destroy', $group->id] ]) !!}
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
            <div class="row">
                <div class="col-sm-4 hidden-xs">
                </div>
                <div class="col-sm-4 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">Listant x-y sur z Sampana,Sampan'Asa,Fikambanana</small>
                </div>
                <div class="col-sm-4 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-a-0">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection