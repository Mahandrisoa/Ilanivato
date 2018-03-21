@extends('member::layouts.master')

@section('section_center')

    <div class="list box">
        <div class="box-header b-b">
            <h3>IREO MPIANDRAIKITRA NY SAMPANA
                <a href="{{route('bureaux.edit.all')}}" class="btn btn-xs primary pull-right">Modifier</a>
            </h3>
        </div>
        <div class="box-body">
            <div class="list-item">
                <h6>Ny filoha
                </h6>
                <div class="list-body">
                    <a href="" class="_500 pull-right">{{ isset($group->president->name) ? $group->president->name:'' }}</a>
                    <small class="block text-muted"></small>
                </div>
            </div>
            <div class="list-item">
                <h6>Ny filoha mpanampy
                    <div class="dropdown pull-right">

                    </div>
                </h6>
                <div class="list-body">
                    <a href=""
                       class="_500 pull-right">{{ isset($group->vicePresident->name) ? $group->vicePresident->name: '' }}</a>
                </div>
            </div>
            <div class="list-item">
                <h6>Ny mpitan-tsoratry ny fivoriana
                    <div class="dropdown pull-right">

                    </div>
                </h6>
                <div class="list-body">
                    <a href=""
                       class="_500 pull-right">{{ isset($group->secretaire->name)? $group->secretaire->name: '' }}</a>
                </div>
            </div>
            <div class="list-item">
                <h6>Ny mpitan-tsoratry ny vola
                    <div class="dropdown pull-right">
                    </div>
                </h6>
                <div class="list-body">
                    <a href=""
                       class="_500 pull-right">{{ isset($group->comptable->name)? $group->comptable->name: '' }}</a>
                </div>
            </div>
            <div class="list-item">
                <h6>Ny mpitahiry vola
                    <div class="dropdown pull-right">
                    </div>
                </h6>
                <div class="list-body">
                    <a href=""
                       class="_500 pull-right">{{ isset($group->tresorier->name)?$group->tresorier->name :'' }}</a>
                </div>
            </div>
            <div class="list-item">
                <h6>Ny mpanolo-tsaina
                    <button class="pull-right btn btn-warning btn-xs" id="add-conseiller">
                        <span class="fa fa-plus"></span>
                    </button>
                    <button class="pull-right btn btn-xs" id="update-conseiller">
                        <span class="fa fa-edit"></span>
                    </button>
                </h6>

                <div id="conseiller-form" class="list-item" style="display: none;border: solid 1px #eee;">
                    <div class="col-sm-12">
                        <form action="{{ route('conseiller.store') }}" class="form-horizontal" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Nom du conseiller</label>
                                <input type="text" class="col-sm-7" name="conseiller_name">
                                <input type="submit" class="btn btn-sm primary col-sm-2" value="Soumettre">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="list-body">
                    <ul>
                        @forelse($group->conseillers as $conseiller)
                            <li>{{ $conseiller->name }}
                                {!! Form::open(['route'=> ['conseiller.destroy', $conseiller], 'method' => 'DELETE']) !!}
                                <button type="submit" class="btn btn-xs red-800 pull-right del-conseiller" style="display: none;">
                                    <span class="fa fa-remove"></span>
                                </button>
                                {!! Form::close() !!}
                            </li>
                        @empty
                            Aucun conseillers
                        @endforelse
                    </ul>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')
    @parent
    <script>
        $(function () {
            $('#add-conseiller').on('click', function (e) {
                $('#conseiller-form').toggleClass('show');
            });

            $('#update-conseiller').on('click', function(e){
                $('.del-conseiller').toggleClass('show');
            });
        })
    </script>
@endsection