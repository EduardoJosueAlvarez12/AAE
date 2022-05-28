@extends('layouts.app')

@section('content')



<div id="login-jumbotron" class="jumbotron jumbotron-fluid">


    <div class="flex-container-space-between">

        <div id="arrow-button">
            <a id="arrow-button" class="bi bi-arrow-left" href="{{ url('/') }}"></a>
        </div>

        <div>
            <div id="title" class="header" style="font-size: 30px; color: #FFFFFF">Ask & Answer Education</div>
        </div>

        <div>
            <h2 style="color: #4F14A0;">Help</h2>
        </div>
    </div>


    <div class="flex-container">


        <div>

            <div id="login-title">
                <h1 style="font-size: 70px; color: #FFFFFF">Iniciar <br />
                    Sesión</h1>
                <p style="font-size: 15px; color: #BEA6ED">¿No tiene una cuenta? <a href="{{ route('register') }}">Regístrese</a></p>
            </div>
        </div>

        <div>

            <div id="login-form" class="container-fluid">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div id="login-control">
                        <input id="email" type="email" class="form-control-fluid form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div id="login-control">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div id="login-control">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label style="color: #FFFFFF" class="form-check-label" for="remember">
                                {{ __('Recuérdame') }}
                            </label>
                        </div>
                    </div>

                    <div id="login-button">
                        <button id="login-button" type="submit" class="btn btn-primary">
                            {{ __('Iniciar Sesión') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                        
                        
                    </div>
                </form>
            </div>

        </div>


    </div>

</div>


@endsection