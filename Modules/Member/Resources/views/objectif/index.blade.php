@extends('member::layouts.master')
@section('section_center')

    <div class="box">
        <div class="box-header">
            <h3>TANJON'NY :
                @if(Auth::user()->isAdmin())
                    Fiangonana
                @else
                    {{ Auth::user()->group->name }}
                @endif
            </h3>
        </div>
        <div class="box-body">
            <div>
                {{ Form::open(array('route' => 'objectifs.store')) }}
                <textarea name="intitule" class="form-control" rows="3"
                          placeholder="Hanampy ireo tanjona efa misy"></textarea>
                <div class="box-footer clearfix">
                    <button type="submit" class="btn pull-right btn-sm amber-500"
                            style="color:rgba(255, 255, 255, 0.87);">Ajouter
                    </button>
                </div>
                {{ Form::close() }}
            </div>
            <div class="streamline b-l m-l-md">
                @forelse($objectifs as $objectif)
                    <div class="sl-item">
                        <div class="sl-content">
                            <div class="sl-date text-muted">
                            </div>
                            <div class="sl-author">
                                <div class="box-tool">
                                    <ul class="nav">
                                        <li class="nav-item inline dropdown">
                                            <a class="nav-link" data-toggle="dropdown">
                                                <i class="material-icons md-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                                <a class="dropdown-item"
                                                   href="{{ route('objectifs.edit', ['$objectif' => $objectif]) }}">Modifier</a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['objectifs.destroy', $objectif] ]) !!}
                                                {!! Form::submit('Supprimer', ['class' => 'dropdown-item']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                            </div>
                            <p>
                                {{ $objectif->intitule }}
                            </p>
                            <div class="box collapse m-a-0 b-a" id="reply-1">
                                <form>
                                        <textarea class="form-control no-border" rows="3"
                                                  placeholder="Type something..."></textarea>
                                </form>
                                <div class="box-footer clearfix">
                                    <button class="btn btn-info pull-right btn-sm">Post</button>
                                    <ul class="nav nav-pills nav-sm">
                                        <li class="nav-item"><a class="nav-link" href><i
                                                        class="fa fa-camera text-muted"></i></a></li>
                                        <li class="nav-item"><a class="nav-link" href><i
                                                        class="fa fa-video-camera text-muted"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Vide...</p>
                @endforelse
            </div>
        </div>
        <div class="box-footer clearfix">
            <div class="row">
                <div class="col-sm-4 text-right text-center-xs">
                    {{--{{ $objectifs->links() }}--}}
                </div>
            </div>
        </div>
    </div>

@endsection