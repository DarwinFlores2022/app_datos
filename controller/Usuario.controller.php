<?php
session_start();
require_once "model/Usuario.php";
class UsuarioController
{

    private $model;
    public $title = "";

    public function __CONSTRUCT()
    {
        $this->model = new Usuario();
    }

    public function Index()
    {
        if (isset($_SESSION["ok"]) && $_SESSION["ok"] != null) {
            header('Location: ?view=home');
        }
        $mensaje = "";

        $title = "Usuario";
        require_once 'view/assets/header.php';
        require_once 'view/usuario/index.php';
        require_once 'view/assets/pie.php';
    }

    function iniciarSesion()
    {
        $user = new Usuario();


        $user->usuario = $_REQUEST["usuario"];
        $user->clave = $_REQUEST["clave"];


        if ($this->model->IniciarSession($user)) {
            $_SESSION["usuario"] = $user->usuario;
            $_SESSION["nombre"] = $user->nombre;
            $_SESSION["ok"] = true;

            header('Location: ?view=home');
        } else {
            header('Location: ?view=usuario&msg=error');
        }
    }

    function cerrarSesion()
    {


        unset($_SESSION["usuario"]);
        unset($_SESSION["nombre"]);
        unset($_SESSION["ok"]);


        header('Location: ?view=usuario');
    }
}