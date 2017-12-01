@extends('layouts.app')

@section('title',Auth::user()->group->name)

@section('content')
    <div class="container-fluid">
        <!--- INTERLUDE --->
        @include('member::partials._interlude')
        <!--- END INTERLUDE --->

        <div class="row">
            <!--- SECTION CENTER --->
            @yield('section_center')
            <!--- END SECTION CENTER --->

            <!--- PROFIL BOX --->
            @include('member::partials._profil_box')
            <!--- END PROFIL BOX --->

            <!--- SIDEBAR RIGHT --->
            @include('member::partials._sidebar_left')
            <!--- END SIDEBAR RIGHT --->
        </div>

    </div>
@endsection
