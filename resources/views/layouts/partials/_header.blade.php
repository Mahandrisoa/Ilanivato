<header>
    <div class="navbar navbar-md navbar-fixed-top white">
        <div class="container">
            <a data-toggle="collapse" data-target="#navbar-1" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                <i class="fa fa-bars"></i>
            </a>

            <!-- brand -->
            <a class="navbar-brand md" href="{{ url('/') }}" ui-scroll-to="home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                    <path d="M 4 4 L 44 4 L 44 44 Z" fill="#ff9800"/>
                    <path d="M 4 4 L 34 4 L 24 24 Z" fill="#ffc107"/>
                    <path d="M 4 4 L 24 4 L 4  44 Z" fill="#ffeb3b"/>
                </svg>
                @auth
                <span class="hidden-folded inline">{{ Auth::user()->group->name }}</span>
                @else
                    <span class="hidden-folded inline">FJKM Ilanivato Misionera</span>
                @endauth
            </a>
            <!-- / brand -->
            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm text-center white" id="navbar-1">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav nav-active-border top b-primary pull-right m-r-lg">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><span class="nav-text">Se connecter</span></a>
                    </li>
                    @else
                        <li class="nav-item inline dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="nav-text">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-scale pull-right">
                                <a class="dropdown-item" href>Profil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Se déconnecter</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
                <!-- / link and dropdown -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
</header>
<div class="padding"></div>