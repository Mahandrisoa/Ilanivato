@extends('layouts.app')

@section('title',Auth::user()->group->name)
@section('css')
    @parent
@show
@section('content')
    <div class="container-fluid">
        <!--- INTERLUDE --->
        {{--@include('member::partials._interlude')--}}
                <!--- END INTERLUDE --->

        <div class="row">
            <!--- PROFIL BOX --->
            <div class="col-sm-12 col-md-3">
                @include('member::partials._profil_box')
            </div>
            <div class="col-sm-12 col-md-6">
                @yield('section_center')
            </div>
            <!--- END SECTION CENTER --->
            @include('member::partials._sidebar_left')
        </div>

    </div>
@endsection
@section('js')
    @parent
@show