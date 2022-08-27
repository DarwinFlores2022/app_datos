<?php
ob_start();
// Operaciones para generar el HTML que pueden ser llamadas a Bases de Datos, while, etc...

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2612/2612467.png" type="image/x-png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <table>
        <tr>
            <td><img src="https://cdn-icons-png.flaticon.com/512/2612/2612467.png" width="50" alt="IMg"></td>
            <td>
                <h2>CRUD - PHP - POO - PDO - MVC - BOOTSTRAP</h2>
            </td>

        </tr>
    </table>
    <h4 style="text-align: center;">CATEGORIES</h4>


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
</body>

</html>

<?php

// Volcamos el contenido del buffer
$html = ob_get_clean();

require_once 'pdf/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('enable_remote', TRUE);

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("mi.pdf", array("Attachment" => 0));
?>
