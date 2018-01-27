@extends('member::layouts.master')
@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="margin">
            <h5 class="m-b-0 _300">Toriteny
                <div class="btn-group pull-right">
                    <a href="{{ route('fiainam-panahy.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="panel box no-border m-b-xs">
            <div class="box-header p-y-sm">
                <a data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                    Toriteny ny : {{ $toriteny->date }}
                </a>
            </div>
            <div id="c_1" class="collapse in">
                <div class="box-body">
                    <p class="text-sm text-muted"><span class="text-md pull-left w-32 m-r rounded success">A</span>
                        {{ $toriteny->content }}
                    </p>
                    <p class="">{{ $toriteny->author }}</p>
                </div>
            </div>
        </div>

    </div>
@endsection