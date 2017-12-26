@extends('member::layouts.master')

@section('section_center')
    <div class="col-sm-12 push-md-3 col-md-6">
        <div class="list box">
            <div class="box-header b-b">
                <h3>IREO MPIANDRAIKITRA NY SAMPANA</h3>
            </div>
            <div class="box-body">
                <div class="list-item">
                    <h6>Ny filoha
                        <div class="dropdown pull-right">
                            <button class="btn btn-xs white btn-icon" data-toggle="dropdown"><i
                                        class="fa fa-pencil text-muted m-r-sm"></i></button>
                            <div class="dropdown-menu dropdown-menu-scale pull-right" style="width: 500px;">
                                <div class="dropdown-item">
                                    <div class="box-body">
                                        {{ Form::open(array('route' => array( 'presidents.update', $group->president->id ), 'files' => true )) }}
                                        {{csrf_field()}}
                                            <div class="form-group row">
                                                <label for="presidentName"
                                                       class="col-sm-2 form-control-label">Anarana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="presidentName"
                                                           name="presidentName"
                                                           value="{{ $group->president->name }}"
                                                           required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="presidentAvatar"
                                                       class="col-sm-2 form-control-label">Sary</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control-file" id="presidentAvatar"
                                                           name="presidentAvatar"/>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="form-group row">
                                                <input type="submit" class="btn pull-right btn-sm amber-500"
                                                       style="color:rgba(255, 255, 255, 0.87);" value="Modifier">
                                            </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h6>
                    <div class="list-left">
                        <img src="{{ asset('uploads/'.$group->directoryName.'/avatar/'. $group->president->avatar) }}"
                             class="w-40 circle">
                    </div>
                    <div class="list-body">
                        <a href="" class="_500">{{ $group->president->name }}</a>
                        <small class="block text-muted"></small>
                    </div>
                </div>
                <div class="list-item">
                    <h6>Ny filoha mpanampy
                        <div class="dropdown pull-right">
                            <button class="btn btn-xs white btn-icon" data-toggle="dropdown"><i
                                        class="fa fa-pencil text-muted m-r-sm"></i></button>
                            <div class="dropdown-menu dropdown-menu-scale pull-right" style="width: 500px;">
                                <div class="dropdown-item">
                                    <div class="box-body">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="vicePresidentName"
                                                       class="col-sm-2 form-control-label">Anarana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="vicePresidentName"
                                                           name="vicePresidentName"
                                                           value="{{ $group->vicePresident->name }}"
                                                           required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="vicePresidentAvatar"
                                                       class="col-sm-2 form-control-label">Sary</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control-file"
                                                           id="vicePresidentAvatar" name="vicePresidentAvatar"
                                                           placeholder="Aucun"/>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="form-group row">
                                                <input type="submit" class="btn pull-right btn-sm amber-500"
                                                       style="color:rgba(255, 255, 255, 0.87);" value="Modifier">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h6>
                    <div class="list-left">
                        <img src="{{ asset('images/a0.jpg ') }}" class="w-40 circle">
                    </div>
                    <div class="list-body">
                        <a href="" class="_500">{{ $group->vicePresident->name }}</a>
                    </div>
                </div>
                <div class="list-item">
                    <h6>Ny mpitan-tsoratry ny fivoriana
                        <div class="dropdown pull-right">
                            <button class="btn btn-xs white btn-icon" data-toggle="dropdown"><i
                                        class="fa fa-pencil text-muted m-r-sm"></i></button>
                            <div class="dropdown-menu dropdown-menu-scale pull-right" style="width: 500px;">
                                <div class="dropdown-item">
                                    <div class="box-body">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="secretaireName"
                                                       class="col-sm-2 form-control-label">Anarana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="secretaireName"
                                                           name="presidentName"
                                                           value="{{ $group->secretaire->name }}"
                                                           required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="secretaireAvatar"
                                                       class="col-sm-2 form-control-label">Sary</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control-file" id="secretaireAvatar"
                                                           name="presidentAvatar"
                                                           placeholder="Aucun"/>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="form-group row">
                                                <input type="submit" class="btn pull-right btn-sm amber-500"
                                                       style="color:rgba(255, 255, 255, 0.87);" value="Modifier">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h6>
                    <div class="list-left">
                        <img src="{{ asset('images/a0.jpg ') }}" class="w-40 circle">
                    </div>
                    <div class="list-body">
                        <a href="" class="_500">{{ $group->secretaire->name }}</a>
                    </div>
                </div>
                <div class="list-item">
                    <h6>Ny mpitan-tsoratry ny vola
                        <div class="dropdown pull-right">
                            <button class="btn btn-xs white btn-icon" data-toggle="dropdown"><i
                                        class="fa fa-pencil text-muted m-r-sm"></i></button>
                            <div class="dropdown-menu dropdown-menu-scale pull-right" style="width: 500px;">
                                <div class="dropdown-item">
                                    <div class="box-body">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="comptableName"
                                                       class="col-sm-2 form-control-label">Anarana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="comptableName"
                                                           name="presidentName"
                                                           value="{{ $group->comptable->name }}"
                                                           required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="comptableAvatar"
                                                       class="col-sm-2 form-control-label">Sary</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control-file" id="comptableAvatar"
                                                           name="comptableAvatar"/>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="form-group row">
                                                <input type="submit" class="btn pull-right btn-sm amber-500"
                                                       style="color:rgba(255, 255, 255, 0.87);" value="Modifier">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h6>
                    <div class="list-left">
                        <img src="{{ asset('images/a0.jpg ') }}" class="w-40 circle">
                    </div>
                    <div class="list-body">
                        <a href="" class="_500">{{ $group->comptable->name }}</a>
                    </div>
                </div>
                <div class="list-item">
                    <h6>Ny mpitahiry vola
                        <div class="dropdown pull-right">
                            <button class="btn btn-xs white btn-icon" data-toggle="dropdown"><i
                                        class="fa fa-pencil text-muted m-r-sm"></i></button>
                            <div class="dropdown-menu dropdown-menu-scale pull-right" style="width: 500px;">
                                <div class="dropdown-item">
                                    <div class="box-body">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="tresorierName"
                                                       class="col-sm-2 form-control-label">Anarana</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="tresorierName"
                                                           name="presidentName"
                                                           value="{{ $group->tresorier->name }}"
                                                           required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tresorierAvatar"
                                                       class="col-sm-2 form-control-label">Sary</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control-file" id="tresorierAvatar"
                                                           name="tresorierAvatar"
                                                           placeholder="Aucun"/>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="form-group row">
                                                <input type="submit" class="btn pull-right btn-sm amber-500"
                                                       style="color:rgba(255, 255, 255, 0.87);" value="Modifier">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h6>
                    <div class="list-left">
                        <img src="{{ asset('images/a0.jpg ') }}" class="w-40 circle">
                    </div>
                    <div class="list-body">
                        <a href="" class="_500">{{ $group->tresorier->name }}</a>
                    </div>
                </div>
                <div class="list-item">
                    <h6>Ny mpanolo-tsaina
                        <button class="pull-right btn btn-warning btn-xs">+</button>
                    </h6>
                    @forelse($group->conseillers as $conseiller)
                        <div class="list-item">
                            <div class="list-left">
                                <img src="{{ asset('images/a0.jpg ') }}" class="w-40 circle">
                            </div>
                            <div class="list-body">
                                <h6>{{ $conseiller->name }}</h6>
                                <div class="dropdown dropup pull-right">
                                    <button class="btn btn-xs white btn-icon" data-toggle="dropdown"><i
                                                class="fa fa-pencil text-muted m-r-sm"></i></button>
                                    <div class="dropdown-menu dropdown-menu-scale pull-right" style="width: 500px;">
                                        <div class="dropdown-item">
                                            <div class="box-body">
                                                <form action="" class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="conseillerName"
                                                               class="col-sm-2 form-control-label">Anarana</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control"
                                                                   id="conseillerName"
                                                                   name="conseillerName" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="conseillerAvatar"
                                                               class="col-sm-2 form-control-label">Sary</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control-file"
                                                                   name="conseillerAvatar"
                                                                   placeholder="Aucun"/>
                                                        </div>
                                                    </div>
                                                    <div class="divider"></div>
                                                    <div class="form-group row">
                                                        <input type="submit" class="btn pull-right btn-sm amber-500"
                                                               style="color:rgba(255, 255, 255, 0.87);"
                                                               value="Modifier">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    @empty
                        Aucun conseillers
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @parent
    <script type="application/javascript">
        $(function () {
            var global = {};
            global.forms = $('form');
            global.handleSuccess = function (data) {
                var _form = $(this);
                var _shooter = this;
                var _anchor = $($(_shooter).parentsUntil('list-item')[5]).find('[class="_500"]');
                console.log(_anchor);
                console.log(data.data.name);
            }

            global.handelError = function (error) {
                console.warn(error);
            }

            $.each(global.forms, function (index, item) {
//                $(item).on('submit', function (event) {
//                    event.preventDefault();
//                    var _url = $(item).attr('action');
//                    var _formData = new FormData(item);
//
//                    axios.post(_url, _formData)
//                            //.then(global.handleSuccess.bind(this))
//                            .then(function(response) {
//                                console.log(response);
//                            })
//                            .catch(global.handleError);
//                });
            });

        });
    </script>
@endsection