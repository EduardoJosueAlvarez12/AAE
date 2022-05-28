@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo enlace se ha enviado a su correo.') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir, por favor verifique el enlace de confirmación en tu correo.') }}
                    {{ __('Si no recibió el correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Click aquí para solicitar otro correo de confirmación') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
