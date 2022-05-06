@include('loginNavbar')


<!-- contenido -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Formulario de registro
</button>

<!-- Modal para el registro-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario de Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- incluimos el formulario de registro-->
                <form action="{{ url('/AAE/login') }}" method='post'>
                    @csrf
                    @include('A&AE.registroUsuario')
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@include('loginFooter')
<!--
<h2>Crear regitro</h2>

<form action="/albums" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1"> 
</div>
<div class="mb-3">
        <label for="" class="form-label"> Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2"> 
</div> 
<div class="mb-3">
        <label for="" class="form-label"> Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3"> 
</div>     
<div class="mb-3">
        <label for="" class="form-label"> Cantidad</label>
        <input id="cantidad" name="catidad" type="number" class="form-control" tabindex="3"> 
</div> 
<div class="mb-3">
        <label for="" class="form-label"> Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3"> 
</div> 
<a href="/albums" class="btn btn-secondary" tabindex="6">Cancelar</a>
<button type="sumit" class="btn btn-primary" tabindex="5">Guardar</button>

</form>
-->
