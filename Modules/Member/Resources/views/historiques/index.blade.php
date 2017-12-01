@extends('member::layouts.master')

@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="box" id="historique_box">
            {{--<div class="box-header b-b">--}}
                {{--<h3>NY TANTARAN'NY SAMPANA</h3>--}}
            {{--</div>--}}
            {{--<div class="box-body">--}}
                {{--<!-- TAONA NIFORONANA -->--}}
                {{--<div>--}}
                    {{--<h6>Taona niforonana : <span class="text">{{ $group->date_creation }}</span>--}}
                        {{--@if($group->date_creation)--}}
                            {{--<button class="pull-right btn btn-xs white btn-icon">--}}
                                {{--<i class="fa fa-pencil text-muted m-r-sm"></i>--}}
                            {{--</button>--}}
                        {{--@else--}}
                            {{--<button class="pull-right btn btn-warning btn-xs">+</button>--}}
                        {{--@endif--}}
                    {{--</h6>--}}
                {{--</div>--}}
                {{--<!-- END TAONA NIFORONANA -->--}}

                {{--<div class="dropdown-divider"></div>--}}

                {{--<!-- EVENT COMPONENT : ZAVA-NISY -->--}}
                {{--<div>--}}
                    {{--<h6>Zava-nisy--}}
                        {{--<button class="pull-right btn btn-warning btn-xs">+</button>--}}
                    {{--</h6>--}}
                    {{--@forelse ($group->historiques as $h)--}}
                        {{--<div class="streamline b-l m-b m-l">--}}
                            {{--<div class="sl-item">--}}
                                {{--<div class="sl-right">--}}
                                    {{--<button class="pull-right btn btn-xs white btn-icon">--}}
                                        {{--<i class="fa fa-pencil text-muted m-r-sm"></i>--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                                {{--<div class="sl-content">--}}
                                    {{--<div class="sl-author">{{ $h->date }} :</div>--}}
                                    {{--<div>{{ $h->evenement }}</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@empty--}}
                        {{--<p>Aucune historique.</p>--}}
                    {{--@endforelse--}}
                {{--</div>--}}
                {{--<!-- END ZAVA-NISY -->--}}
            {{--</div>--}}
        </div>
    </div>

@endsection

@