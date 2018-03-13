@extends('layouts.master')
@section('css')
    @parent
@endsection
@section('content')
    <div class="row">
        <h3>FIANGONANA MISIONERA</h3>
        <div class="row">
            <div class="col-sm-12">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <div class="img-list">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>
        $(function () {

            var acc = document.getElementsByClassName("accordion");

            $(document).on('click','button.accordion',function(e){
               $(this).toggleClass('active');
                var panel = $(this)[0].nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });

            $.ajax({
                url: '/fiangonana-misionera-missions',
                method: 'GET'
            }).success(function (response) {
                var imgElement = '';
                var list = '';
                for (var img in response) {
                    $.each(response[img].images, function (index, value) {
                        var url = value.image_path.small.url;
                        imgElement += '<div class="gallery"><a target="_blank"> <img src="' + url + '" alt="alt" width="180" height="240"/> </a> </div>';
                    });
                    imgElement = '<button class="accordion">' + response[img].intitule + '</button><div class="panel-about">' + imgElement + '</div>';
                    list += imgElement;
                    imgElement = '';
                }
                $('.img-list').html(list);

            }).error(function (err) {
                console.warn(err);
            });
        });
    </script>
@endsection