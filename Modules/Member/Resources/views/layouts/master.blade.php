@extends('layouts.app')

@section('title',Auth::user()->group->name)
@section('css')
    @parent
@show
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                @include('member::partials._profil_box')
            </div>
            <div class="col-sm-12 col-md-9">
                @yield('section_center')
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
@show