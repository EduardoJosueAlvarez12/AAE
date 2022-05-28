@extends('layouts.app')

@section('content')

<div id="register-jumbotron" class="jumbotron jumbotron-fluid">

    <div class="flex-container" style="color: #FFFFFF">

        <div>

            <div id="register-title" class="container-fluid">
                <h1 style="font-size: 70px; color: #FFFFFF">Registro de <br />
                    Usuario
                </h1>
            </div>

        </div>


        <div>

            <div id="register-body" class="container-fluid">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <div id="register-control">
                            <label for="nombre">{{ __('Nombres') }}</label>

                            <div>
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" placeholder="Ejemplo: Josué Marcos" autofocus>

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="paterno">{{ __('Paterno') }}</label>

                            <div>
                                <input id="paterno" type="text" class="form-control @error('paterno') is-invalid @enderror" name="paterno" value="{{ old('paterno') }}" placeholder="Ejemplo: Hernández" autofocus>

                                @error('paterno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="materno">{{ __('Materno') }}</label>

                            <div>
                                <input id="materno" type="text" class="form-control @error('materno') is-invalid @enderror" name="materno" value="{{ old('materno') }}" placeholder="Example: Vásquez" autofocus>

                                @error('materno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="email">{{ __('Correo Electrónico') }}</label>

                            <div>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="josuehernandez@mined.clases.edu.sv">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="password">{{ __('Contraseña') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                <div id="passwordHelpBlock" class="form-text" style="color:antiquewhite">
                                    Su contraseña debe tener entre 8 y 60 carácteres, contener al menos una mayúscula, una minúsucula, un número y un carácter especial: @$!%*?&.
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div id="register-control">
                        <div id="login-buttom">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection