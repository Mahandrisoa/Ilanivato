@extends('member::layouts.master')
@section('css')
    @parent
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <style>
        textarea {
            resize: none;
        }
    </style>
@endsection
@section('section_center')
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">PERIKOPA FJKM
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-sm info" data-toggle="modal"
                            data-target=".bs-example-modal-lg">Nouveau
                    </button>
                </div>
            </h5>
        </div>
        <div class="box-body">
            <table class="table" id="mhf-table">
                <thead>
                <tr>
                    <th>Volana</th>
                    <th>Taona</th>
                    <th>Lohahevitra</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($perikopa as $p)
                    <tr>
                        <td>{{$p->mois}}</td>
                        <td>{{$p->annee}}</td>
                        <td>{{$p->lohahevitra}}</td>
                        <td class="pull-right" style="display: inline-flex;">
                            <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                    data-token="{{csrf_token()}}"
                                    data-id="{{$p->id}}"
                                    data-url="{{route('api.perikopa.delete')}}">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal add -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="modalAdd">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajouter un nouveau "Lohahevitra"
                    </h4>
                </div>
                <div class="modal-body">
                    {{ Form::open(array('route' => array('perikopa.store'),'id'=> 'perikopaForm')) }}
                    <div class="form-group row">
                        {{ Form::label('', 'Mois',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-3 pull-left">
                            <select name="mois" id="" class="form-control" required="true">
                                <option value="1">Janvier</option>
                                <option value="2">Février</option>
                                <option value="3">Mars</option>
                                <option value="4">Avril</option>
                                <option value="5">Mai</option>
                                <option value="6">Juin</option>
                                <option value="7">Juillet</option>
                                <option value="8">Août</option>
                                <option value="9">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('','Année',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-3 pull-left">
                            <input type="number" max="2999" min="2018" name="annee" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('', 'Lohahevitra',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::text('lohahevitra', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 pull-right">
                            <input type="submit" class="btn btn-sm primary" value="Soumettre">
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script>
        $(function () {

            $('#perikopaForm').on('submit', function (e) {
                e.preventDefault();
                var formData = $(this).serializeArray();
                var options = {
                    url: $(this).attr('action'),
                    data: formData,
                    method: $(this).attr('method')
                };
                $.ajax(options)
                        .success(function (response) {
                            var item = '<tr><td>' + response.mois + '</td><td>' + response.annee + '</td><td>' + response.lohahevitra + '</td><td class="pull-right" style="display: inline-flex;"> <button type="submit" class="btn btn-icon btn-xs red-800 delBtn" data-token="{{csrf_token()}}" data-id="' + response.id + '" data-url="{{route('api.perikopa.delete')}}"> <i class="fa fa-remove"></i> </button> </td></tr>';
                            $('.table>tbody').append(item);
                            $('.modal').modal('hide');
                            toastr.success('Ajout avec success!');
                        })
                        .error(function (err) {
                            toastr.error('Une erreur est survenue lors de l\'ajout, les enregistrements existent déja!');
                        });
            });

            $('.modal').on('hidden.bs.modal', function () {
                $('.modal-body').find('input[type="text"]').each(function (index, elem) {
                    $(elem).val('');
                });
            });

            $(document).on('click', '.delBtn', function (e) {
                var that = $(this),
                        parentRow = $(that.parents()[1]),
                        playload = {
                            'id': $(this).data('id')
                        },
                        token = $(this).data("token"),
                        options = {
                            "url": $(this).data('url'),
                            "type": 'delete',
                            "data": playload,
                            "_token": token
                        };
                console.log(playload);
                $.ajax(options)
                        .success(function (response) {
                            parentRow.fadeOut();
                            toastr.success('Suppression avec success!');
                        })
                        .error(function (err) {
                            toastr.error('Une erreur est survenue lors de la suppression');
                        });
            });
        });
    </script>
@endsection