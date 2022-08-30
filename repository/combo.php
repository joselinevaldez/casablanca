<?php
require_once("../../connection/db.php");
class combo {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }

    public function getCombos($orderASC = false){
        try{
          
            if($this->db->connection()){
                $data = array();
                $order = "";
                if($orderASC){
                    $order = " ORDER BY name ASC";
                }
                $query = "SELECT * from combo WHERE is_active <> 2 $order; ";
                
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
    public function getProductsCombo($comboId){
        try{
          
            if($this->db->connection()){
                $data = array();
               
                $query = "SELECT product.product_id, product.name, product.code, product.name, product.image_path, product.sale_price, 
                (SELECT IF(combo_product_id > 0, 1,0) ) AS 'check'
                FROM product LEFT JOIN combo_product ON product.product_id = combo_product.product_id AND combo_id = '$comboId';";

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
    public function getCombo($id){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT * FROM combo WHERE combo_id = '$id' LIMIT 1; ";
                
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

