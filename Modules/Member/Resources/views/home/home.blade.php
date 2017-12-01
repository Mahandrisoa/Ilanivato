@extends('member::layouts.master')

@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="box">
            <div class="box-header b-b">
                <h3>Vaovao samihafan'ny Sampana, Sampan'Asa ary Fikambanana</h3>
            </div>
            <div class="box-body">
                <div class="row row-sm">
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c6.jpg') }}" class="w-full"></img>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c4.jpg') }}" class="w-full"></img>
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href>
                            <img src="{{ asset('images/c5.jpg') }}" class="w-full"></img>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <form>
                <textarea class="form-control no-border" rows="3" placeholder="Vaovaon'ny Sampana (à publier) ..."></textarea>
            </form>
            <div class="box-footer clearfix">
                <button class="btn pull-right btn-sm amber-500" style="color:rgba(255, 255, 255, 0.87);">Publier</button>
                <ul class="nav nav-pills nav-sm">
                    <li class="nav-item"><a class="nav-link" href><i class="fa fa-book text-muted"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href><i class="fa fa-camera text-muted"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href><i class="fa fa-video-camera text-muted"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3>Vaovaon'ny
                    @if(Auth::user()->isAdmin())
                        Fiangonana
                    @else
                        {{ Auth::user()->group->name }}
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="streamline b-l m-l-md">
                    <div class="sl-item">
                        <div class="sl-left">
                            <img src="{{ asset('images/user.jpg') }}" class="img-circle">
                        </div>
                        <div class="sl-content">
                            <div class="sl-date text-muted">il y a 2 minutes</div>
                            <div class="sl-author">
                                <a href></a>
                            </div>
                            <div>
                            </div>
                            <p>1 Pierre 2:9
                                “Vous, au contraire, vous êtes une race élue, un sacerdoce royal, une nation sainte, un peuple acquis, afin que vous annonciez les vertus de celui qui vous a appelés des ténèbres à son admirable lumière,”
                            </p>
                            <div class="sl-footer">
                                <a href data-toggle="collapse" data-target="#reply-1">
                                    <i class="fa fa-fw fa-mail-reply text-muted"></i> Reply
                                </a>
                            </div>
                            <div class="box collapse m-a-0 b-a" id="reply-1">
                                <form>
                                    <textarea class="form-control no-border" rows="3" placeholder="Type something..."></textarea>
                                </form>
                                <div class="box-footer clearfix">
                                    <button class="btn btn-info pull-right btn-sm">Post</button>
                                    <ul class="nav nav-pills nav-sm">
                                        <li class="nav-item"><a class="nav-link" href><i class="fa fa-camera text-muted"></i></a></li>
                                        <li class="nav-item"><a class="nav-link" href><i class="fa fa-video-camera text-muted"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left">
                            <img src="{{ asset('images/user.jpg') }}" class="img-circle">
                        </div>
                        <div class="sl-content">
                            <div class="sl-date text-muted">08 Novembre 2017 à 8:30</div>
                            <div class="sl-author">
                                <a href></a>
                            </div>
                            <div>
                                <p>Fifaninana ara-panatanjahan-tena lehibe hokarakarain'ny FIFA na Fikambanana ara-panatanjahan-tena FJKM Ilanivato <a href class="text-info"></p>
                                <p>
		                      <span class="inline p-a-xs b-a dark-white">
		                        <img src="{{ asset('images/sport.jpeg') }}" class="img-responsive">
		                      </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline dropdown">
                        <a class="nav-link" data-toggle="dropdown">
                            <i class="material-icons md-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="">Modifier</a>
                            <a class="dropdown-item" href="">Supprimer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">Partager</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection