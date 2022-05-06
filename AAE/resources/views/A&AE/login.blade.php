@include('loginNavbar')


<!-- contenido -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Formulario de registro
</button>

<!-- Modal para el registro-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-danger" style="display:none"></div>
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Formulario de Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- incluimos el formulario de registro-->
                <form action="{{ url('/AAE/login') }}" method='post'>
                    @csrf
                    @include('A&AE.registroUsuario')
                </form>
            </div>
        </div>
    </div>
</div>

@include('loginFooter')