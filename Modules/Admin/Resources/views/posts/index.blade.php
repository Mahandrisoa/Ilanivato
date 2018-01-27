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
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped b-t">
                    <thead>
                    <th>Anarana</th>
                    <th>Sampana</th>
                    <th>Sokajy</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->titre }}</td>
                            <td>{{ $post->titre }}</td>
                            <td>{{ $post->group->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <div class="m-y-sm pull-right">
                                    {{ Form::model($post, array('route' => array('admin.posts.validate', $post))) }}
                                        <input type="submit" class="btn btn-xs white" value="Valider">
                                    {{ Form::close() }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection