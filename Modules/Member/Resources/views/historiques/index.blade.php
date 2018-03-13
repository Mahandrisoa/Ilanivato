@extends('member::layouts.master')
@section('css')
    @parent
    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            border-radius: 0px;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 30%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            color: white;
        }

        .modal-body {
            padding: 10px;
        }

        .modal-footer {
            padding: 2px 16px;
            color: white;
        }
    </style>
@endsection
@section('section_center')

    <div class="box">
        <div class="box-header b-b">
            <div class="btn-group pull-right">
                @if($group->date_creation == '')
                    <button class="btn btn-xs primary" id="creation_btn">Date de création</button>
                @else
                    <button id="creation_btn_update" class="btn btn-xs primary">Modifier la date de création</button>
                @endif
                <a href="{{ route('histories.create') }}" class="btn btn-xs success">Ajouter</a>
            </div>
            <h3>Tantara</h3>
        </div>
        <div class="box-body">
            <ul class="list no-border">
                <li class="list-item">
                    <a class="pull-left m-r">
                        Niorina ny :
                    </a>
                    <div class="list-body clear">
                        <div class="m-y-sm pull-right">
                            @if($group->date_creation =='')
                                Veuillez en choisir
                            @endif
                            {{$group->date_creation}}
                        </div>
                    </div>
                </li>
                @foreach($histories as $history)
                    <li class="list-item">
                        <a class="pull-left m-r">
			                	<span class="w-40">
			                  		<img src="{{ asset('images/bible.jpg') }}" class="w-full" alt="...">
			                 	</span>
                        </a>
                        <div class="list-body clear">
                            <div class="m-y-sm pull-right">
                                @if($history->images()->first() !=  null)
                                    <a href="" class="btn btn-xs white btn-icon">
                                        <i class="fa fa-image"></i>
                                    </a>
                                @endif
                                <a href="{{ route('histories.edit',['history'=> $history]) }}"
                                   class="btn btn-xs white btn-icon"><i class="fa fa-pencil"></i>
                                </a>
                                <div style="display: inline-flex;padding-top: 0">
                                    {!! Form::open(['route'=> ['histories.destroy', $history ], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-icon btn-xs">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <b>
                                {{ $history->date }}
                            </b>
                            <a href="" class="_500 text-ellipsis">{{ $history->evenement }}</a>
                        </div>
                    </li>
                @endforeach
                {{ $histories->links() }}
            </ul>
        </div>
    </div>

    <div id="modalDateCreation" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header primary">
                <span class="close">&times;</span>
                <h4>Date de création</h4>
            </div>
            {{ Form::open( array('route' => array('date_creation.store'))) }}
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row center">
                    <div class="col-md-6">Date de création</div>
                    <div class="col-md-4 pull-right">
                        <input type="number" name="date_creation" min="1878" value="2018" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" id="submit" class="btn btn-sm primary" value="Soumettre">
            </div>
            {{ Form::close() }}
        </div>

    </div>

    <div id="modalDateUpdate" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header primary">
                <span class="close">&times;</span>
                <h4>Date de création</h4>
            </div>
            {{ Form::open( array('route' => array('date_creation.update'), 'method' => 'PUT')) }}
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row center">
                    <div class="col-md-6">Date de création</div>
                    <div class="col-md-4 pull-right">
                        <input type="number" name="date_creation" min="1878" value="2018" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" id="submit" class="btn btn-sm primary" value="Soumettre">
            </div>
            {{ Form::close() }}
        </div>

    </div>

@endsection
@section('js')
    @parent
    <script>
        $(function () {

            // Get the modal
            var modal = document.getElementById('modalDateCreation');
            var modalUpdate = document.getElementById('modalDateUpdate');

            // Get the button that opens the modal
            var btn = document.getElementById("creation_btn");
            var updatdBtn = document.getElementById("creation_btn_update");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            $('#creation_btn_update').on('click', function () {
                modal.style.display = "block";
            });

            $('#creation_btn_update').on('click', function () {
                $('#modalDateCreation').css('display' , 'block');
            });

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        });
    </script>
@endsection
