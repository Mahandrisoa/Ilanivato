@extends('layouts.master')
@section('css')
    @parent
@endsection
@section('content')
    <div class="row">
        <h4>FIKAMBANAN'NY MPITORITENY SY KATEKISTA</h4>
        <div class="col-md-12">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </p>

            <button class="accordion">Ny tantaran'ny FMK</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                @foreach($group->historiques as $history)
                    <div class="row">
                        <div class="col-sm-2"><b>{{ $history->date }} : </b></div>
                        <div class="col-sm-10">
                            <p>{{ $history->evenement }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="accordion">Ny tanjon'ny Fikambanana</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <ul>
                    @foreach($group->objectifs as $objectif)
                        <li>{{$objectif->intitule}}</li>
                    @endforeach
                </ul>
            </div>
            <button class="accordion">Ireo birao</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <div class="row">
                    <div class="col-sm-4"><b>Ny Filoha : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->president->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny filoha mpanampy : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->vicePresident->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpitan-tsoratry ny fivoriana : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->secretaire->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpitan-tsoratry ny vola : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->comptable->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpitahiry vola : </b></div>
                    <div class="col-sm-8">
                        <p>{{ $group->tresorier->name }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><b>Ny mpanolo-tsaina : </b></div>
                    <div class="col-sm-8">
                        @foreach($group->conseillers as $conseiller)
                            <p>{{ $conseiller->name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery">
                <a target="_blank">
                    <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="300"
                         height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" >
                    <img src="https://www.w3schools.com/css/img_forest.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" >
                    <img src="https://www.w3schools.com/css/img_lights.jpg" alt="Northern Lights" width="600"
                         height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" >
                    <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="300"
                         height="200">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" >
                    <img src="https://www.w3schools.com/css/img_forest.jpg" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank">
                    <img src="https://www.w3schools.com/css/img_lights.jpg" alt="Northern Lights" width="600"
                         height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection