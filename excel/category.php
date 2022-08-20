<?php
$fecha = date('d_m_Y');
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: attachment; filename=reporte_$fecha.xls");

?>


<table border="1" width="100%">
    <thead style="background-color: khaki;">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Status</th>

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
            <td><span><?php echo $datos->estado == 1 ? "Activo" : "Inactivo";  ?></span></td>


        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='3'>No se encontraron registros</td></tr>";
        }

        ?>

    </tbody>
</table>