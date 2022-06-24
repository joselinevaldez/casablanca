<?php
require_once("../../connection/db.php");
class measurementUnits {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }

    public function getMeasurementUnits(){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT * from measurement_unit WHERE is_active <> 2; ";
                
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
    public function getMeasurementUnit($id){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT * FROM measurement_unit WHERE measurement_unit_id = '$id' LIMIT 1; ";
                
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

