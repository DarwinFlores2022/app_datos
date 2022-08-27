<?php
require_once "model/Product.php";
require_once "model/Category.php";
class ProductController
{

    private $model;
    public $title = "LOGIN";

    public function __CONSTRUCT()
    {
        $this->model = new Product();
    }

    function Index()
    {
        $mensaje = "";
        if (isset($_REQUEST["msg"])) {

            if ($_REQUEST["msg"] == "save") {
                $mensaje = '<div class="alert alert-success" role="alert">
            Datos almacenados/ Actualizados correctamente!
          </div>';
            } else {
                $mensaje = '<div class="alert alert-danger" role="alert">
            Error!
          </div>';
            }
        }


        $prod = new Product();
        $category = new Category();
        if (isset($_REQUEST['id']) && $_REQUEST['id'] > 0) {
            $prod = $this->model->BuscarPorId($_REQUEST['id']);
        }
        $title = "PRODUCTOS";
        require_once 'view/assets/header.php';

        require_once 'view/products/index.php';
        require_once 'view/assets/pie.php';
    }

    function Guardar()
    {
        $prod = new Product();

        $prod->id = $_REQUEST["id"];
        $prod->namep = $_REQUEST["nombre"];
        $prod->quantity = $_REQUEST["quantity"];
        $prod->price = $_REQUEST["price"];
        $prod->idcategory = $_REQUEST["idcategories"];



        if ($prod->id > 0) {
            $this->model->Actualizar($prod);
        } else {
            $this->model->Registrar($prod);
        }



        header('Location: ?view=product&msg=save');
    }
}