<div class="box">
    <div class="box-tool">
        <ul class="nav">
            <li class="nav-item inline dropdown">
                <a class="nav-link text-muted" data-toggle="dropdown">
                    <i class="material-icons md-18">&#xe164;</i>
                </a>
                <div class="dropdown-menu dropdown-menu-scale pull-right">
                    <a class="dropdown-item" href>Changer de photo de groupe</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="p-a-md text-center">
        <p class="text-center"><img src="{{ asset('images/bible.jpg') }}" class="img-circle w-xs"></p>
        <a href class="text-md block">{{ Auth::user()->name }}</a>
        <div>
            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-facebook indigo"></i>
            </a>
            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-twitter light-blue"></i>
            </a>
            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                <i class="fa fa-google-plus"></i>
                <i class="fa fa-google-plus red"></i>
            </a>
        </div>
        <div class="text-center m-t">
            <a href class="btn btn-sm rounded primary w-sm m-y-xs amber-500"
               style="color:rgba(255, 255, 255, 0.87);">Pejy</a>
        </div>
    </div>
    <div class="p-a">
        <ul class="nav" ui-nav="">
            <li class="nav-header hidden-folded">
                <small class="text-muted">Tableau de bord</small>
            </li>
            @if(Auth::user()->group->hasToriteny)
                <li>
                    <a href="{{ route('toriteny-member.index') }}">
                  <span class="nav-icon">
                        <i class="fa fa-book"></i>
                    </span>
                        <span class="nav-text">Toriteny</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('vaovao-member.index') }}">
                  <span class="nav-icon">
                        <i class="fa fa-newspaper-o"></i>
                    </span>
                        <span class="nav-text">Vaovao</span>
                    </a>
                </li>
            @endif
            <li>
                <a href="{{ route('histories.index')  }}">
                  <span class="nav-icon">
                        <i class="fa fa-history"></i>
                  </span>
                    <span class="nav-text">Tantara</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bureaux.index')  }}">
                  <span class="nav-icon">
                        <i class="fa fa-group"></i>
                  </span>
                    <span class="nav-text">Birao</span>
                </a>
            </li>
            <li>
                <a href="{{ route('objectifs.index') }}">
                  <span class="nav-icon">
                    <i class="fa fa-road"></i>
                  </span>
                    <span class="nav-text">Tanjona</span>
                </a>
            </li>
            <li>
                <a href="{{ route('calendars.index') }}">
                  <span class="nav-icon">
                    <i class="fa fa-calendar"></i>
                  </span>
                    <span class="nav-text">Calendrier</span>
                </a>
            </li>

            @if(Auth::user()->group->hasToriteny)
            <li class="nav-header hidden-folded">
                <small class="text-muted">Fampianarana</small>
            </li>
            <li>
                <a href="{{ route('fiangonana-misionera-member.index') }}">
                  <span class="nav-icon">
                    <i class="fa fa-book"></i>
                  </span>
                    <span class="nav-text">Fiangonana Misionera</span>
                </a>
            </li>
            <li>
                <a href="{{ route('fampianarana-member.index') }}">
                  <span class="nav-icon">
                    <i class="fa fa-book"></i>
                  </span>
                    <span class="nav-text">Fampianarana 80</span>
                </a>
            </li>
            @endif

            <li class="nav-header hidden-folded">
                <small class="text-muted">Fiangonana Lehibe sy Mitory</small>
            </li>
            <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">
                    </i>
                  </span>
                    <span class="nav-text">Fiangonana Lehibe</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                    <li>
                        <a href="{{ route('fiainam-panahy.index') }}">
                            <span class="nav-text">Fiainam-panahy</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fitomboana.index') }}">
                            <span class="nav-text">Fitombonana</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fiombonana.index') }}">
                            <span class="nav-text">Fiombonana</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">
                        <span ui-include="'../assets/images/i_7.svg'"></span>
                    </i>
                  </span>
                    <span class="nav-text">Fiangonana Mitory</span>
                </a>
                <ul class="nav-sub">
                    <li>
                        <a href="{{ route('tafika-masina.index') }}">
                            <span class="nav-text">Tafika Masina</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('maha-olona.index') }}">
                            <span class="nav-text">Fiheverana ny Maha-olona</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
