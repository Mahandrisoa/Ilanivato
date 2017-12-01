<div class="col-sm-6 col-md-3">
    <div class="box">
        <div class="box-header b-b">
            <h4>
                @if(Auth::user()->isAdmin())
                    FIANGONANA
                    @else
                SAMPANA @endif VELON'NY TENIN'ANDRIAMANITRA: MITORY, MIZARA SY MAHATAONA ARY MAHATAMANA</h4>
        </div>
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item inline dropdown">
                    <a class="nav-link" data-toggle="dropdown">
                        <i class="material-icons md-18"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href="">Ajouter</a>
                        <a class="dropdown-item" href="">Modifier</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">This month</a>
                        <a class="dropdown-item" href="">This week</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="list-group no-radius no-borders">
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item text-ellipsis">
                <span class="w-8 rounded m-r-sm success"></span>
                <span>Fiainam-panahy</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item text-ellipsis">
                <span class="w-8 rounded m-r-sm success "></span>
                <span>Fitomboana</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item text-ellipsis">
                <span class="w-8 rounded m-r-sm warning"></span>
                <span>Fiombonana</span>
            </a>
            <a data-toggle="modal" data-target="#chat" data-dismiss="modal"  class="list-group-item text-ellipsis">
                <span class="w-8 rounded m-r-sm danger"></span>
                <span>Tafika Masina</span>
            </a>
            <div class="dropdown-divider"></div>
            <a data-toggle="modal" data-target="#chat" data-dimiss="modal"  class="list-group-item text-ellipsis">
                <span class="w-8 rounded m-r-sm danger"></span>
                <span>Fiheverana ny maha-olona</span>
            </a>
        </div>
    </div>
</div>