<?php
require_once "model/Category.php";
class CategoryController
{

    private $model;
    public $title = "";

    public function __CONSTRUCT()
    {
        //$this->model = new Product();
    }

    public function Index()
    {
        $category = new Category();
        $title = "Categories";
        require_once 'view/assets/header.php';
        require_once 'view/category/index.php';
        require_once 'view/assets/pie.php';
    }

   
}