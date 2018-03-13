@extends('layouts.master')
@section('css')
    @parent
@endsection
@section('content')
    <div class="row">
        <h4>FIKAMBANAN'NY DIAKONA SY LOHOLONA</h4>
        <div class="col-md-12">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </p>

            <button class="accordion">Ny tantaran'ny Fikambanan'ny Diakona sy Loholona</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
            <button class="accordion">Ny tanjon'ny Fikambanana</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
            <button class="accordion">Ireo birao</button>
            <div class="panel-about">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
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