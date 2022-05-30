@extends('layouts.app')

@section('content')

<!-- íconos -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
</svg>

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
                                <span class="invalid-feedback" style="padding: 2px;">
                                    <svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:" style="color:#e64545">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <strong style="color:#ed9f9f">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="paterno">{{ __('Primer Apellido') }}</label>

                            <div>
                                <input id="paterno" type="text" class="form-control @error('paterno') is-invalid @enderror" name="paterno" value="{{ old('paterno') }}" placeholder="Ejemplo: Hernández" autofocus>

                                @error('paterno')
                                <span class="invalid-feedback" style="padding: 2px;">
                                    <svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:" style="color:#e64545">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <strong style="color:#ed9f9f">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="materno">{{ __('Segundo Apellido') }}</label>

                            <div>
                                <input id="materno" type="text" class="form-control @error('materno') is-invalid @enderror" name="materno" value="{{ old('materno') }}" placeholder="Example: Vásquez" autofocus>

                                @error('materno')
                                <span class="invalid-feedback" style="padding: 2px;">
                                    <svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:" style="color:#e64545">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <strong style="color:#ed9f9f">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div id="register-control">
                            <label for="email">{{ __('Correo Electrónico') }}</label>

                            <div>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="josuehernandez@mined.clases.edu.sv">

                                @error('email')
                                <span class="invalid-feedback" style="padding: 2px;">
                                    <svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:" style="color:#e64545">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <strong style="color:#ed9f9f">{{ $message }}</strong>
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
                                <span class="invalid-feedback" style="padding: 2px;">
                                    <svg class="bi flex-shrink-0 me-2" width="16" height="16" role="img" aria-label="Danger:" style="color:#e64545">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <strong style="color:#ed9f9f">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div id="register-control">
                        <div id="login-button">
                            <button type="submit" id="login-button" class="btn btn-primary">
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