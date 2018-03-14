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
                    <th>Versé biblique (Matin)</th>
                    <th>Texte bibilque (Matin)</th>
                    <th>Versé biblique (Soir)</th>
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
                            {!! Form::open(['method' => 'DELETE', 'route' => ['mahafantatra-feno-member.destroy', $m->id],'class'=> 'delForm' ]) !!}
                            <button type="submit" class="btn btn-icon btn-xs red-800">
                                <i class="fa fa-remove"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @foreach($mfhs as $m)

            @endforeach
        </div>
    </div>

    <!-- Modal add -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="modalAdd">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">Ajouter un nouveau verse</div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display: none;">Les enregistrements pour cette date existent déja</div>
                    {{ Form::open(array('route' => array('mahafantatra-feno-member.store'),'id'=> 'mhfForm')) }}
                    <div class="form-group row">
                        {{ Form::label('', 'Jour',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            <input type="number" min="1" max="30" name="jour" value="1">
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('', 'Mois',['class'=>'col-sm-2 form-control-label' ]) }}
                        <div class="col-sm-10 pull-right">
                            <input type="number" min="1" max="12" name="mois" value="1">
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('', 'Vérsé bibilique (Matin)',['class'=>'col-sm-2 form-control-label' ]) }}
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
                        {{ Form::label('andininy_hariva', 'Vérsé bibilique (Soir)',['class'=>'col-sm-2 form-control-label' ]) }}
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
                            <input type="submit" class="btn btn-sm primary" value="submit">
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
                            var item = '<tr><td>' + response.jour + '</td><td>' + response.mois + '</td><td>' + response.fandaharana_maraina + '</td><td>' + sm + '</td><td>' + response.fandaharana_hariva + '</td><td>' + sh + '</td></tr>';
                            $('.table>tbody').append(item);
                            $('.modal').modal('hide');
                        })
                        .error(function (err) {
                            $('.alert').toggleClass('show');
                        });
            });
            $('.modal').on('hidden.bs.modal',function(){
                alert("hidden");
                $('.alert').removeClass('show');
            })

//            $('.delForm').on('submit', function (e) {
//                var options = {
//                    url: $(this).attr('action'),
//                    metohd: 'delete',
//                    data: $(this).serializeArray()
//                };
//                $.ajax(options)
//                        .success(function (response) {
//                            console.log(response);
//                        }).error(function (err) {
//                    console.warn(err);
//                });
            //});
        });
    </script>
@endsection