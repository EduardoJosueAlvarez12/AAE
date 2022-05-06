<form class="needs-validation">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="nombre" class="form-label">Nombres:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ejemplo: Josué Antonio"
                                >

                            <div class="invalid-feedback">
                                Type in your first name
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="apellido-paterno" class="form-label">Apellido Paterno: </label>
                            <input type="text" class="form-control" name="apellido-paterno" id="apellido-paterno" placeholder="Ejemplo: Hernández"
                                >
                            <div class="invalid-feedback">
                                Type in your middle name
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="apellido-materno" class="form-label">Apellido Materno: </label>
                            <input type="text" class="form-control"  name="apellido-materno" id="apellido-materno" placeholder="Example: Vásquez"
                                >
                            <div class="invalid-feedback">
                                Type in your last name
                            </div>
                        </div>

                        


                        <div class="mb-3">
    <label for="email" class="form-label">Correo electrocnico </label>
    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.</div>



            <label for="inputPassword5" class="form-label">Contraseña</label>
        <input type="password" name="cotraseña"id="contraseña" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
        Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emojis.
        </div>

</div>

<button class="w-100 btn btn-dark btn-lg" type="submit">Registre sus datos</button>

</form>
