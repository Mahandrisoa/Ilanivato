@extends('member::layouts.master')
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">Toriteny
                <div class="btn-group pull-right">
                    <a href="{{ route('toriteny-member.create') }}">
                        <button type="button" class="btn btn-sm info">Nouveau</button>
                    </a>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <div class="m-b" id="accordion">
                @foreach($toriteny as $t)
                    <div class="panel box no-border m-b-xs">
                        <div class="box-header light">
                            {{ date('d-m-Y', strtotime($t->date)) }}
                            <div class="box-tool">
                                <ul class="nav">
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                                            <i class="material-icons md-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a href="{{ route('toriteny-member.edit', ['toriteny_member' => $t->id]) }}"
                                               class="dropdown-item"
                                               href="">Modifier</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                               href="{{ route('toriteny-member.destroy', ['toriteny_member' => $t]) }}"
                                               onclick="event.preventDefault();document.getElementById('toritenyForm').submit();">Supprimer</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['toriteny.destroy', 'toriteny_member' => $t ],'id' => 'toritenyForm' ]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body">
                            {{ str_limit($t->content, 280) }}
                            @if( strlen($t->content) > 280 )
                                <a href="{{ route('toriteny-member.show',[ 'toriteny' => $t ]) }}"
                                   class="text-success">Suite</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection