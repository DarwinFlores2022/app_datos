<div class="py-5 text-center">
    <h2>CRUD - PHP - POO - PDO - MVC - BOOTSTRAP</h2>
    <h4>REGISTRO DE PROVEEDOR</h4>
    <hr>

</div>

<div class="row g-6">


    <div class="col-md-6 col-lg-8">
        <h4 class="mb-3">REGISTRO</h4>
        <form class="needs-validation" novalidate method="POST" autocomplete="OFF" action="?view=product&a=Guardar">
            <input type="hidden" name="id" value="<?php echo $provee->id; ?>" />
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="nombreproveedor" class="form-label">Nombre Proveedor:</label>
                    <input type="text" class="form-control" name="nombreproveedor" id="nombreproveedor"
                        placeholder="Prodveedor" value="<?php echo $provee->nombre_p; ?>" required>
                    <div class="invalid-feedback">
                        Proveedor is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="quantity" class="form-label">Quantity: </label>
                    <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity"
                        value="<?php echo $provee->telefono; ?>" required>
                    <div class="invalid-feedback">
                        Quantity is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="price" class="form-label">Price: </label>
                    <div class="input-group has-validation">
                        <span class="input-group-text fa fa-money"></span>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Price" required
                            value="<?php echo $prod->price; ?>">
                        <div class="invalid-feedback">
                            Price is required.
                        </div>
                    </div>
                </div>
            </div>


            <hr class="my-4">

            <button class="btn btn-success btn-lg" type="submit"> <i class="fa fa-save    "></i>
                REGISTRAR</button>
            <a class="btn btn-dark btn-lg" href="?view=product"> <i class="fa fa-save    "></i>
                NUEVO</a>
        </form>
    </div>
</div>