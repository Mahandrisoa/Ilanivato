@extends('layouts.app')

@section('title','Se connecter')

@section('content')
    <div class="container">
        <div class="center-block w-xxl w-auto-xs p-y-md zoomIn animated">
            <div class="navbar">
                <div class="pull-center">
                    <div ui-include="'../views/blocks/navbar.brand.html'"></div>
                </div>
            </div>
            <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
                <div class="m-b text-sm">
                    <h6>Se connecter avec votre compte</h6>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="md-form-group float-label">
                        <input type="email" class="md-input has-value" name="email" value="{{ old('email') }}" required
                               autofocus>
                        <label>Email</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="md-form-group float-label">
                        <input type="password" class="md-input has-value" name="password" required>
                        <label>Mot de passe</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="m-b-md">
                        <label class="md-check">
                            <input type="checkbox" class="has-value"
                                   name="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i>
                            Se souvenir de moi
                        </label>
                    </div>
                    <button type="submit" class="btn primary btn-block p-x-md">Se connecter</button>
                </form>
            </div>
            <div class="p-v-lg text-center">
                <div class="m-b"><a href="{{ route('password.request') }}" class="text-primary _600">Mot de passe
                        oublié</a></div>
            </div>
        </div>
    </div>
@endsection
