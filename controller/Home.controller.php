<?php

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
        
        $title = "PÁGINA PRINCIPAL";
        require_once 'view/assets/header.php';
        require_once 'view/home.php';
        require_once 'view/assets/pie.php';
    }
}