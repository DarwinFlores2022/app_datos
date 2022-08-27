<?php
class Proveedor
{
    private $pdo;

    public $id;
    public $nombre_p;
    public $telefono;



    public function __CONSTRUCT()
    {
        $conn = new Conexion();

        try {
            $this->pdo = $conn->Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM tb_proveedor order by id desc");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function BuscarPorId($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM tb_proveedor WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}