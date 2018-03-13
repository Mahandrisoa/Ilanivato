@extends('layouts.master')
@section('css')
    @parent
@endsection
@section('content')
    <div class="col-md-9">
        <div class="row">
            <h4>IREO FAMPIANARANA</h4>
        </div>
        <div>
            @foreach($fampianarana as $f)
                <div class="panel t-box no-border" style="margin-bottom: 20px;">
                    <div class="t-box-header light">
                        <span class="glyphicon glyphicon-one-fine-dot" aria-hidden="true"></span>
                        {{ $f->titre }}
                    </div>
                    <div class="t-box-body">
                        <p>
                            {{ substr($f->contenu,0,300) }}
                            @if(count_chars($f->contenu) >= 350 )
                                <a href="{{ route('fampianarana.show',$f->id) }}">Suite</a>
                            @endif
                            <b class="pull-right">{{ \Carbon\Carbon::parse($f->created_at)->format('l j F Y') }}</b>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $fampianarana->links() }}
    </div>
@endsection