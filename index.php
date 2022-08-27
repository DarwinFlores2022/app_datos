<?php
require_once 'config/Conexion.php';

$controller = isset($_GET["view"]) ? $_GET["view"] : "home";
if (file_exists("controller/" . $controller . ".controller.php")) {
    # code... 

    // Todo esta lógica hara el papel de un FrontController
    if (!isset($_REQUEST['view'])) {
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();
    } else {
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['view']);
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

        // Instanciamos el controlador
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;

        // Llama la accion
        call_user_func(array($controller, $accion));
    }
} else {
    include "view/error.php";
}
?>