<?php
class Category
{
    private $pdo;

    public $idcategory;
    public $nombre;
    public $estado;



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

            $stm = $this->pdo->prepare("SELECT * FROM category order by idcategory desc");
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
                ->prepare("SELECT * FROM category WHERE idcategory = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}