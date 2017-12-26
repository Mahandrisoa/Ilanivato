@extends('member::layouts.master')
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="margin">
            <h5 class="m-b-0 _300">Fiainam-panahy
                <div class="btn-group pull-right">
                    <a href="{{ route('fiainam-panahy.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="m-b" id="accordion">
            @foreach($posts as $post)
                <div class="panel box no-border m-b-xs">
                    <div class="box-header p-y-sm">
                        <span class="pull-right label text-sm">3214</span>
                        <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1" aria-expanded="false"
                           class="collapsed">
                            {{ $post->titre }}
                        </a>
                    </div>
                    <div id="c_1" class="collapse" aria-expanded="false" style="height: 0px;">
                        <div class="box-body">
                            <p class="text-sm text-muted"><span
                                        class="text-md pull-left w-32 m-r rounded success">A</span>
                                {{ $post->content }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! $links !!}
    </div>
@endsection