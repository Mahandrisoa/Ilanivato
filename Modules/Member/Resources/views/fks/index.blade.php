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
            <h5 class="m-b-0 _300">IREO MPIKAMBANA ATO AMIN'NY FKS ANKEHITRINY
                {{--<div class="btn-group pull-right">--}}
                {{--<button type="button" class="btn btn-sm info" data-toggle="modal"--}}
                {{--data-target=".bs-example-modal-lg">Nouveau--}}
                {{--</button>--}}
                {{--</div>--}}
            </h5>
        </div>
        <div class="box-body">
            <table class="table" id="mhf-table">
                <thead>
                <tr>
                    <th>Anarana sy Fanampiny</th>
                    <th>Andraikitra</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>RAHARIHANTA Landisoa</td>
                    <td>Tale</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAMAHANDRISOA Eric</td>
                    <td>Biraom-piangonana</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAZANAMAHAZO Olga</td>
                    <td>Biraom-piangonana</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAVAHATRARIVO Hery</td>
                    <td>Laika</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RATOVONARIVO Abela Nirina</td>
                    <td>Laika</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RANDRIAMAMOHA Olivia</td>
                    <td>Laika</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RANIVOARIMANANA Patricia</td>
                    <td>Laika</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAKOTOMALALA Nirina</td>
                    <td>Laika</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>ANDRIANALIJAONA Esther</td>
                    <td>Mpandraharaha</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>ANDRIAMPENOMANANA Hantasoa</td>
                    <td>Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RATSIMARATRA Mbolatiana</td>
                    <td>FRAM</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAMANAMBOLOLONIRINA Herimanantsoa</td>
                    <td>FRAM</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="box">
        <div class="box-header">
            <h5 class="m-b-0 _300">IREO MPIASA MATIHANINA ANKEHITRINY
                {{--<div class="btn-group pull-right">--}}
                {{--<button type="button" class="btn btn-sm info" data-toggle="modal"--}}
                {{--data-target=".bs-example-modal-lg">Nouveau--}}
                {{--</button>--}}
                {{--</div>--}}
            </h5>
        </div>
        <div class="box-body">
            <table class="table" id="mhf-table">
                <thead>
                <tr>
                    <th>Anarana sy Fanampiny</th>
                    <th>Andraikitra</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>RAHARIHANTA Voahanginirina Landisoa
                    </td>
                    <td class="text-center">Tale</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>ANDRIANALIJAONA Ravelosoa Esther
                    </td>
                    <td class="text-center">Mpandraharaha</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RASOAMANATANY Rakotoarimisa
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAKOTOSON Tsiorinirina
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RATSIMBAVOLOLONA Veroniaina Lydia
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAHELINIRINA Malalasoa
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAFARAVOLOLOMANANA Chantale Elie
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>ANDRIAMPENOMANANA Ravalison Hantasoa
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>RAVELOARINORO Miora Onisoa
                    </td>
                    <td class="text-center">Mpampianatra</td>
                    <td class="pull-right" style="display: inline-flex;">
                        <button type="submit" class="btn btn-icon btn-xs red-800 delBtn"
                                data-token="{{csrf_token()}}"
                                data-url="">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
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
                    <h4 class="modal-title">Ajouter un nouveau membre
                    </h4>
                </div>
                <div class="modal-body">
                    {{ Form::open(array('route' => array('mahafantatra-feno-member.store'),'id'=> 'mhfForm')) }}
                    <div class="form-group row">
                        {{ Form::label('', 'Anarana sy Fanampiny',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::text('nom_prenoms', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('', 'Andraikitra',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            {{ Form::text('poste', null , array('class' => 'form-control','placeholder' => '','required' => true)) }}
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