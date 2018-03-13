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
    <script>
        $(function(){
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('50c969d6b833c34aa5be', {
                cluster: 'ap2',
                encrypted: true
            });

            var channel = pusher.subscribe('post');
            channel.bind('App\\Events\\PostSent', function(data) {
                toastr.info('Vous avez une nouvelle notification de validation de :');
                $('.label-publication').html('5');
                $($('.label-publication').parents()[0]).addClass('show');
            });
        });
    </script>
@stop