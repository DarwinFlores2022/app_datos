<div class="py-5 text-center">
    <h2>CRUD - PHP - POO - PDO - MVC - BOOTSTRAP</h2>
    <h4>USUARIOS</h4>
    <hr>

</div>
<?php echo $mensaje; ?>
<div class="col-md-6 col-lg-12">
    <h4 class="mb-3">INICIAR SESIÓN</h4>
    <form class="needs-validation" novalidate method="POST" autocomplete="OFF" action="?view=usuario&a=iniciarSesion">

        <div class="row g-3">
            <div class="col-sm-6">
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario" value=""
                    required>
                <div class="invalid-feedback">
                    usuario is required.
                </div>
            </div>

            <div class="col-sm-6">
                <label for="clave" class="form-label">Clave: </label>
                <input type="password" class="form-control" id="quantity" placeholder="clave" name="clave" value=""
                    required>
                <div class="invalid-feedback">
                    clave is required.
                </div>
            </div>



        </div>


        <hr class="my-4">

        <button class="btn btn-success btn-lg" type="submit"> <i class="fa fa-lock    "></i>
            INICIAR</button>

    </form>
</div>
</div>