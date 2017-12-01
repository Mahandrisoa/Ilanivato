@extends('layouts.app')

@section('css')
    @parent
@endsection

@section('content')
    @parent
    <div class="container">
        <div class="row">
            @include('admin::partials._sidebar')
            <div class="col-md-6 col-lg-9">
                @yield('section')
            </div>
        </div>
    </div>

@endsection

@section('js')
    @parent
@stop