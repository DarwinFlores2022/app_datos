<?php
class Usuario
{
    private $pdo;

    public $id;
    public $nombre;
    public $usuario;
    public $clave;




    public function __CONSTRUCT()
    {
        $conn = new Conexion();

        try {
            $this->pdo = $conn->Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function IniciarSession($data)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM tb_usuario WHERE usuario = ? and clave = md5(?) limit 1");
            $stm->execute(array(
                $data->usuario,
                $data->clave
            ));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}