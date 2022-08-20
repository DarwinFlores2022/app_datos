<?php
class Conexion
{
    private $servidor = "localhost";
    private $nombredb = "mvc";
    private $usuario = "root";
    private $password = "";
    private $puerto = "3306";


    //metodos getters
    function getServidor()
    {
        return $this->servidor;
    }
    function getNombredb()
    {
        return $this->nombredb;
    }
    function getUsuario()
    {
        return $this->usuario;
    }
    function getPassword()
    {
        return $this->password;
    }
    function getPuerto()
    {
        return $this->puerto;
    }

    public  function Conectar()
    {
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");
        try {
            $conexion = new PDO("mysql:host=" . $this->getServidor() . ";port=" . $this->getPuerto() . ";dbname=" . $this->getNombredb(), $this->getUsuario(), $this->getPassword(), $opciones);

            return $conexion;
        } catch (Exception $e) {
            die("El error de la conexión es: " . $e->getMessage());
        }
    }
}

/* $conexion = new Conexion();
if ($conexion->Conectar()) {
    echo "conexion Exitosa";
} else {
    echo "conexion Exitosa";
} */