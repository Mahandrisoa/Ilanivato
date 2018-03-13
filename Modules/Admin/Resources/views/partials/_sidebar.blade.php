<div class="col-md-6 col-lg-3">
    <div class="nav-active-border b-primary left right box">
        <ul class="nav nav-sm">
            <li class="nav-item">
                <a class="nav-link block" href="">
                    Accueil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link block" href="{{ route('users.index') }}">
                    Mpiandraikitra
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link block" href="{{ route('groups.index') }}">
                    SSAF
                    {{--<span class="nav-label">--}}
                        {{--<b class="label red">8</b>--}}
                      {{--</span>--}}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link block" href="{{ route('admin.posts.index') }}">
                    Publications
                    <span class="nav-label hide">
                        <b class="label red label-publication"></b>
                      </span>
                </a>
            </li>
        </ul>
    </div>
</div>