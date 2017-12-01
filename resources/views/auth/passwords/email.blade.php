@extends('layouts.app')
@section('title','Mot de passe')

@section('content')
    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md zoomIn animated">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'../views/blocks/navbar.brand.html'"></div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b">
                Vous avez oublié votre mot de passe ?
                <p class="text-xs m-t">
                    Entrer votre mot de passe et nous vous envoyerons des instructions comment changer votre mot de
                    passe.
                </p>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                <div class="md-form-group">
                    <input type="email" class="md-input form-control-danger" name="email"
                           value="{{ old('email') }}" required>
                    <label>Votre Email</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">Envoyer</button>
            </form>
        </div>
        <p id="alerts-container"></p>
        <div class="p-v-lg text-center">Retourner à <a href="{{ route('login') }}" class="text-primary _600">Se
                connecter</a></div>
    </div>

    <!-- ############ LAYOUT END-->
@endsection
