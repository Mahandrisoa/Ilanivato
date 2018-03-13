@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Fiainam-panahy
                <div class="btn-group pull-right">
                    <a href="{{ route('fiainam-panahy.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <div class="m-b" id="accordion">
                @foreach($posts as $post)
                    <div class="panel box no-border m-b-xs">
                        <div class="box-header p-y-sm">
                            <div class="pull-right">
                                <div style="display: inline-flex;padding-top: 0">
                                    <a href="{{ route('fiainam-panahy.edit',['fiainam_panahy'=> $post]) }}"
                                       class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                                    </a>
                                    {!! Form::open(['route'=> ['fiainam-panahy.destroy', $post], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-icon btn-xs">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <a href="{{ route('fiainam-panahy.show',[ 'fiainam_panahy' => $post->id]) }}">
                                {{ $post->titre }}
                            </a>
                        </div>
                    </div>
                @endforeach
                {!! $links !!}
            </div>
        </div>
    </div>
@endsection