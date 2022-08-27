<?php
session_start();
class HomeController
{

    private $model;
    public $title = "LOGIN";

    public function __CONSTRUCT()
    {
        //$this->model = new Product();
    }

    public function Index()
    {
        if (!$_SESSION["ok"]) {
            header('Location: ?view=usuario');
        }
        $title = "PÁGINA PRINCIPAL";
        require_once 'view/assets/header.php';
        require_once 'view/home.php';
        require_once 'view/assets/pie.php';
    }
}