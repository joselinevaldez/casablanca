<?php
require_once("../../connection/db.php");
class products {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }

    public function getProducts(){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT product.*, category.name AS category_name, measurement_unit.name AS measurement_name
                        FROM product 
                        LEFT JOIN category ON product.category_id = category.category_id
                        LEFT JOIN measurement_unit ON product.measurement_unit_id = measurement_unit.measurement_unit_id
                        WHERE product.is_active <> 2; ";
                
                $result = $this->db->connection()->query($query);
                while($row=$result->fetch_assoc()){
                    $data[]=$row;
                }
                $this->db->connection()->close();
                return array(
                  "status" => 200,
                  "list"   => $data
                );
            } else {
                return array(
                    "status" => 500,
                    "msg"    => "No fue posible establecer la conexión con la base de datos."
                );
            }
        } catch (Exception $ex) {
            return array(
                "status" => 500,
                "msg"    => "Ocurrió un error inesperado ".$ex->getMessage()." reportelo con el administrador de sistemas"
            );
        }

    }
    public function getProduct($id){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT * FROM product WHERE product_id = '$id' LIMIT 1; ";
                
                $result = $this->db->connection()->query($query);
                $data=$result->fetch_assoc();
                $this->db->connection()->close();
                return array(
                  "status" => 200,
                  "data"   => $data
                );
            } else {
                return array(
                    "status" => 500,
                    "msg"    => "No fue posible establecer la conexión con la base de datos."
                );
            }
        } catch (Exception $ex) {
            $this->db->connection()->close();
            return array(
                "status" => 500,
                "msg"    => "Ocurrió un error inesperado ".$ex->getMessage()." reportelo con el administrador de sistemas"
            );
        }

    }
}

