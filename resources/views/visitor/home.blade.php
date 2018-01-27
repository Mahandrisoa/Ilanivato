@extends('layouts.master')
@section('css')
    @parent
@endsection

@section('news')
    <ul>
        @foreach($events as $e)
            <li>
                <div class="text-yellow">{{ date('d/m/Y', strtotime($e->date)) }}</div>
                <div class="light">{{ $e->event }}</div>
            </li>
        @endforeach
    </ul>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 row">
            <div class="col-sm-4">
                <img src="{{ asset('images/pasteur.jpg') }}" class="w-full" alt="pasteur">
            </div>
            <div class="col-sm-8">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum."
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </div>
        </div>
        <div class="col-sm-4 edito">
            @foreach($toriteny as $t)
                <div class="panel t-box no-border">
                    <div class="t-box-header light">
                        <span class="glyphicon glyphicon-one-fine-dot" aria-hidden="true"></span>
                        Alahady {{ date('d m Y', strtotime($t->date)) }}
                    </div>
                    <div class="t-box-body">
                        {{ str_limit($t->content, 200) }}
                        @if( strlen($t->content) > 200 )
                            <a href="{{ route('toriteny.show',array('toriteny'=>$t)) }}" class="text-success">Suite</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('js')
    @parent
@endsection