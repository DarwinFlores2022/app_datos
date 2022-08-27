<?php
require_once "model/Proveedor.php";
class ProveedorController
{

    private $model;
    public $title = "";

    public function __CONSTRUCT()
    {
        $this->model = new Proveedor();
    }

    public function Index()
    {
        $provee = new Proveedor();
        $title = "Proveedor";
        require_once 'view/assets/header.php';
        require_once 'view/proveedor/index.php';
        require_once 'view/assets/pie.php';
    }

    public function formulario()
    {
        $provee = new Proveedor();
        if (isset($_REQUEST['id']) && $_REQUEST['id'] > 0) {
            $provee = $this->model->BuscarPorId($_REQUEST['id']);
        }
        $title = "REGISTRO DE PROVEEDOR";
        require_once 'view/assets/header.php';
        require_once 'view/proveedor/formulario.php';
        require_once 'view/assets/pie.php';
    }
}