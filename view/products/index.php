<div class="py-5 text-center">
    <h2>CRUD - PHP - POO - PDO - MVC - BOOTSTRAP</h2>
    <h4>PRODUCTOS</h4>
    <hr>

</div>
<?php echo $mensaje; ?>
<div class="row g-6">
    <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">PRODUCTS LIST</span>
            <span class="badge bg-primary rounded-pill"><?php echo count($this->model->Listar()) ?></span>
        </h4>
        <ul class="list-group mb-3">
            <?php
            $price_acum = 0;
            foreach ($this->model->Listar() as $r) {
                $price_acum += $r->price;

            ?>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0"><?php echo $r->namep; ?></h6>
                    <small class="text-muted"><?php echo $r->nombre; ?></small>
                </div>

                <span class="text-muted">$ <?php echo number_format($r->price, 2); ?></span>
                <span><a href="?view=product&id=<?php echo $r->id; ?>" class="btn btn-primary"> <i class="fa fa-edit"
                            aria-hidden="true"></i>
                    </a>&nbsp;<button type="button" class="btn btn-danger"> <i class="fa fa-trash"
                            aria-hidden="true"></i>
                    </button></span>
            </li>

            <?php
            }
            ?>

            <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-warning">
                    <h6 class="my-0">Promo code</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class="text-warning">−$5</span>
            </li> -->
            <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>

                <strong>$ <?php echo number_format($price_acum, 2); ?></strong>
            </li>
        </ul>

        <form class="card p-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Aplicar</button>
            </div>
        </form>
    </div>

    <div class="col-md-6 col-lg-8">
        <h4 class="mb-3">REGISTRO</h4>
        <form class="needs-validation" novalidate method="POST" autocomplete="OFF" action="?view=product&a=Guardar">
            <input type="hidden" name="id" value="<?php echo $prod->id; ?>" />
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="productName" class="form-label">Product Name:</label>
                    <input type="text" class="form-control" name="nombre" id="productName" placeholder="Product Name"
                        value="<?php echo $prod->namep; ?>" required>
                    <div class="invalid-feedback">
                        Product Name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="quantity" class="form-label">Quantity: </label>
                    <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity"
                        value="<?php echo $prod->quantity; ?>" required>
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




                <div class="col-md-5">
                    <label for="country" class="form-label">Categories: </label>
                    <select class="form-select" name="idcategories" id="categories" required>
                        <option value="">Seleccione...</option>
                        <?php
                        $selected = "";
                        foreach ($category->Listar() as $dato) {
                            $selected = "";
                            if ($prod->idcategory == $dato->idcategory) {
                                $selected = "selected";
                            }

                        ?>
                        <option <?php echo "value='" . $dato->idcategory . "' " . $selected; ?>>
                            <?php echo $dato->nombre ?></option>
                        <?php  } ?>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid categories.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="state" class="form-label">Providers</label>
                    <select class="form-select" id="provider">
                        <option value="">Seleccione...</option>
                        <option>Provider . SV.SA</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid provider.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="img" class="form-label">Imagen: </label>
                    <input type="file" class="form-control" id="img" placeholder="">
                    <div class="invalid-feedback">
                        IMG required.
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