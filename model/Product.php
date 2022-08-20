<?php
class Product
{
    private $pdo;

    public $id;
    public $namep;
    public $quantity;
    public $price;
    public $idcategory;


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

            $stm = $this->pdo->prepare("SELECT product.*, category.* FROM `product`  INNER JOIN category  on product.idcategory=category.idcategory  order by product.id desc");
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
                ->prepare("SELECT product.*, category.* FROM `product`  INNER JOIN category  on product.idcategory=category.idcategory  WHERE product.id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM product WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE product SET 
						namep      		= ?,
						quantity          = ?, 
						price        = ?,
                        idcategory = ?
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->namep,
                        $data->quantity,
                        $data->price,
                        $data->idcategory,
                        $data->id

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Product $data)
    {
        try {
            $sql = "INSERT INTO product (namep,quantity,price,idcategory) 
		        VALUES (?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->namep,
                        $data->quantity,
                        $data->price,
                        $data->idcategory
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}