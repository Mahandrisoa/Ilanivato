<div class="col-sm-6 pull-md-6 col-md-3">
    <div class="box">
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item inline dropdown">
                    <a class="nav-link text-muted" data-toggle="dropdown">
                        <i class="material-icons md-18">&#xe164;</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href>Activities</a>
                        <a class="dropdown-item" href>Feed</a>
                        <div class="dropdown-item" href>Photo</div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Follow</a>
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
        <div class="row no-gutter b-t b-b">
            <div class="col-xs-6 b-r">
                <a href="{{ route('membres.historiques') }}" class="p-a block text-center">
                    <span class="block _600">*</span>
                    <span>Tantara</span>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="{{ route('bureaux.index') }}" class="p-a block text-center">
                    <span class="block _600">*</span>
                    <span>Birao</span>
                </a>
            </div>
        </div>
        <div class="row no-gutter b-t b-b">
            <div class="col-xs-6">
                <a class="p-a block text-center" href="{{ route('objectifs.index') }}">
                    <span class="block _600">15</span>
                    <span>Tanjona</span>
                </a>
            </div>
            <div class="col-xs-6 b-r">
                <a class="p-a block text-center">
                    <span class="block _600">3219</span>
                    <span>Sary/Feo/Horonan-tsary</span>
                </a>
            </div>
        </div>
        <div class="p-a">
            <a href class="text-ellipsis"><i class="fa fa-link text-muted m-r-sm"></i> +261 34 80 716 59</a>
            <a href class="text-ellipsis"><i class="fa fa-globe text-muted m-r-sm"></i> {{ Auth::user()->email }}</a>
        </div>
    </div>
</div>