@extends('member::layouts.master')
@section('css')
    @parent
    <style>
        .accordion {
            background-color: #eee;
            color: black;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .accordion.active, .accordion:hover {
            background-color: rgba(179, 179, 179, 0.61);
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .accordion.active:after {
            content: "\2212";
        }

        .panel-about {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            margin-bottom: 0px;
        }

        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .delete-icon {
            display: inline;
            position: relative;
            left: 160px;
            top: 0px;
            cursor: pointer
        }
    </style>
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header b-b">
            <a href="{{ route('fiangonana-misionera-member.create') }}"
               class="btn btn-xs success pull-right">Ajouter</a>
            <h3>Fiangonana Misionera</h3>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="img-list">

        </div>
        {{--@foreach($missions as $mission)--}}
        {{--<button class="accordion">{{$mission->intitule}}</button>--}}
        {{--<div class="panel">--}}
        {{--<p>--}}
        {{--@foreach($images as $img)--}}
        {{--<div class="column">--}}
        {{--<img src="" alt="">--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--@endforeach--}}
    </div>
@endsection
@section('js')
    @parent
    <script>
        $(function () {
            var acc = document.getElementsByClassName("accordion");

            $(document).on('click', '.accordion', function (e) {
                $(this).toggleClass('active');
                var panel = $(this)[0].nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });

            $(document).on('click', 'span.delete-icon', function (e) {
                var id = $(this).data('id');
                var parentGallery = $(this).parents()[1];
                var options = {
                    'url': '/api/fg-misionera-image/' + id,
                    'method': 'delete'
                };
                $.ajax(options).success(function (response) {
                    $(parentGallery).fadeOut();
                }).error(function (err) {
                    console.warn(err);
                })
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
                        imgElement += '<div class="gallery"><a target="_blank"> <span class="delete-icon" data-id="' + value.id + '"><i class="glyphicon glyphicon-remove-circle"></i></span></form><img src="' + url + '" alt="alt" width="180" height="240"/> </a> </div>';
                    });
                    imgElement = '<div class="accordion">' + response[img].intitule + ' </div><div class="panel-about">' + imgElement + '</div>';
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