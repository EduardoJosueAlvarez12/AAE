<form class="needs-validation">
    <div class="row g-3">
        <div class="col-12">
            <label for="nombre" class="form-label">Nombres:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ejemplo: Josué Marcos">
        </div>

        <div class="col-sm-6">
            <label for="paterno" class="form-label">Apellido Paterno: </label>
            <input type="text" class="form-control" name="paterno" id="paterno" placeholder="Ejemplo: Hernández">
            <div class="invalid-feedback">
                Type in your middle name
            </div>
        </div>

        <div class="col-sm-6">
            <label for="materno" class="form-label">Apellido Materno: </label>
            <input type="text" class="form-control" name="materno" id="materno" placeholder="Example: Vásquez">
            <div class="invalid-feedback">
                Type in your last name
            </div>
        </div>

        <div class="col-12">
            <label for="correo" class="form-label">Correo Electronico: </label>
            <input type="correo" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.</div>
        </div>

        <div class="col-12">
            <label for="contrasenia" class="form-label">Contraseña: </label>
            <input type="password" name="contrasenia" id="contrasenia" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
                Su contraseña debe tener entre 8 y 60 carácteres, contener al menos una mayúscula, una minúsucula, un número y un carácter especial.
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="formSubmit">Registrar usuario</button>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#formSubmit').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/AAE/login') }}",
                method: 'post',
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    nombre: $('#nombre').val(),
                    paterno: $('#paterno').val(),
                    materno: $('#materno').val(),
                    correo: $('#correo').val(),
                    contrasenia: $('#contrasenia').val(),
                },
                success: function(result) {
                    if (result.errors) {
                        $('.alert-danger').html('');

                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('#exampleModal').modal('hide');
                    }
                }
            });
        });
    });
</script>