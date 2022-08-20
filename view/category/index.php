<div class="py-5 text-center">
    <h2>CRUD - PHP - POO - PDO - MVC - BOOTSTRAP</h2>
    <h4>CATEGORIES</h4>
    <hr>
    <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> NUEVO</button>
    <a href="?view=category&a=Pdf" target="_blank" class="btn btn-secondary"><i class="fa fa-file-pdf-o"></i> Pdf</a>
    <a href="?view=category&a=Excel" target="_blank" class="btn btn-success"><i class="fa fa-file-excel-o"></i>
        Excel</a>
    <table class="table table-bordered table-hover table-stripped" id="myTable">
        <thead class="btn-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Status</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($category->Listar()) > 0) {
                foreach ($category->Listar() as $datos) {

            ?>
            <tr>
                <th><?php echo $datos->idcategory;  ?></th>
                <td><?php echo $datos->nombre;  ?></td>
                <td><span><?php echo $datos->estado;  ?></span></td>
                <td><a href="#" class="btn btn-primary"> <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>&nbsp;<button type="button" class="btn btn-danger"> <i class="fa fa-trash"
                            aria-hidden="true"></i>
                    </button></td>

            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='3'>No se encontraron registros</td></tr>";
            }

            ?>

        </tbody>
    </table>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
</div>