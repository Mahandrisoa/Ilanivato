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
            <h5 class="m-b-0 _300">MAHAFANTATRA FENO NY HEVITR'ANDRIAMANITRA
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
                    <th>Jour</th>
                    <th>Mois</th>
                    <th>Versets biblique (Matin)</th>
                    <th>Texte bibilque (Matin)</th>
                    <th>Versets biblique (Soir)</th>
                    <th>Texte biblique (Soir)</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mfhs as $m)
                    <tr>
                        <td>{{ $m->jour }}</td>
                        <td>{{ $m->mois }}</td>
                        <td>{{ $m->fandaharana_maraina }}</td>
                        <td>{{ str_limit($m->soratra_masina_maraina,10) }}...</td>
                        <td>{{ $m->fandaharana_hariva }}</td>
                        <td>{{ str_limit($m->soratra_masina_hariva,10) }}...</td>
                        <td class="pull-right" style="display: inline-flex;">
                            <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                    data-token="{{csrf_token()}}" data-jour="{{$m->jour}}"
                                    data-mois="{{$m->mois}}"
                                    data-url="{{route('api.mhf.delete')}}">
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajouter un nouveau versets bibliques
                    </h4>
                </div>
                <div class="modal-body">
                    {{ Form::open(array('route' => array('mahafantatra-feno-member.store'),'id'=> 'mhfForm')) }}
                    <div class="form-group row">
                        {{ Form::label('', 'Jour',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            <input type="number" min="1" max="31" name="jour" value="1" required="true">
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('', 'Mois',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-4 pull-left">
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
                        {{ Form::label('', 'Versets bibilique (Matin)',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::text('fandaharana_maraina', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('', 'Texte bibilique (Matin)',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::textarea('soratra_masina_maraina', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('andininy_hariva', 'Versets bibilique (Soir)',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::text('fandaharana_hariva', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('name', 'Texte bibilique (Soir)',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::textarea('soratra_masina_hariva', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
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
            $('#mhfForm').on('submit', function (e) {
                e.preventDefault();
                var formData = $(this).serializeArray();
                var options = {
                    url: $(this).attr('action'),
                    data: formData,
                    method: $(this).attr('method')
                };
                $.ajax(options)
                        .success(function (response) {
                            console.log(response);
                            var sm = response.soratra_masina_maraina,
                                    sh = response.soratra_masina_hariva;
                            if (sm.length > 10) {
                                sm = sm.substring(0, 10);
                            }
                            if (sh.length > 10) {
                                sh = sh.substring(0, 10);
                            }
                            var item = '<tr><td>' + response.jour + '</td><td>' + response.mois + '</td><td>' + response.fandaharana_maraina + '</td><td>' + sm + '</td><td>' + response.fandaharana_hariva + '</td><td>' + sh + '</td><td class="pull-right"><button type="submit" class="btn btn-icon btn-xs red-800 delBtn" data-token="{{csrf_token()}}" data-jour="' + response.jour + '"data-mois="' + response.mois + '"data-url="{{route('api.mhf.delete')}}"> <i class="fa fa-remove"></i> </button></td></tr>';
                            $('.table>tbody').append(item);
                            $('.modal').modal('hide');
                            toastr.success('Ajout avec success!');
                        })
                        .error(function (err) {
                            toastr.error('Une erreur est survenue lors de l\'ajout, les enregistrements existent déja!');
                        });
            });
            $('.modal').on('hidden.bs.modal', function () {
                $('.modal-body').find('input[type="text"],input[type="number"],textarea').each(function (index, value) {
                    $(value).val('');
                });
            });

            $('.modal').on('show.bs.modal', function () {

            });

            $(document).on('click', '.delBtn', function (e) {
                var that = $(this),
                        parentRow = $(that.parents()[1]),
                        playload = {
                            'mois': $(this).data('mois'),
                            'jour': $(this).data('jour')
                        },
                        token = $(this).data("token"),
                        options = {
                            "url": $(this).data('url'),
                            "type": 'delete',
                            "data": playload,
                            "_token": token
                        };
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
