@extends('member::layouts.master')

@section('section_center')

    <div class="list box">
        <div class="box-header b-b">
            <h3>IREO MPIANDRAIKITRA NY SAMPANA
            </h3>
        </div>
        <div class="box-body">
            <form action="{{ route('bureaux.store') }}" method="post">
                {{ csrf_field() }}
                <div class="list-item">
                    <div class="list-body">
                        <label class="col-md-4" for="">
                            <h6>Ny filoha
                            </h6>
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control pull-right" name="president_name"
                                   value="{{ $group->president->name }}">
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <label class="col-md-4" for="">
                        <h6>Ny filoha mpanampy
                        </h6>
                    </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control pull-right" name="vice_president_name"
                               value="{{ $group->vicePresident->name }}">
                    </div>
                </div>
                <div class="list-item">
                    <label class="col-md-4" for="">
                        <h6>
                            Ny mpitan-tsoratry ny fivoriana
                        </h6>
                    </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control pull-right" name="secretaire_name"
                               value="{{ $group->secretaire->name }}">
                    </div>
                </div>
                <div class="list-item">
                    <label class="col-md-4" for="">
                        <h6>
                            Ny mpitan-tsoratry ny vola
                        </h6>
                    </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control pull-right" name="comptable_name"
                               value="{{ $group->comptable->name }}">
                    </div>
                </div>
                <div class="list-item">
                    <label class="col-md-4" for="">
                        <h6>
                            Ny mpitam-bola
                        </h6>
                    </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control pull-right" name="tresorier_name"
                               value="{{ $group->tresorier->name }}">
                    </div>
                </div>
                <div class="list-item">
                </div>
                <div class="list-item">
                    <div class="col-sm-3 pull-right">
                        <a href="{{ route('bureaux.index') }}" class="btn btn-sm">Retour</a>
                        <input type="submit" class="btn btn-sm primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    @parent

@endsection