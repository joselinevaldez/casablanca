<?php
require_once("../../connection/db.php");
class customers {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }

    public function getCustomers(){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT client.*, ca.address AS address FROM client LEFT JOIN client_address ca ON ca.client_id = client.client_id AND is_principal = 1 WHERE client.is_active <> 2 ";
                
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
    public function getCustomer($id){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT client.*, ca.address AS address, ca.client_address_id FROM client LEFT JOIN client_address ca ON ca.client_id = client.client_id AND is_principal = 1 WHERE client.client_id = '$id' LIMIT 1 ";
                
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
    public function getAddress($client){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT * FROM client_address WHERE client_id = '$client' AND is_active <> 2 ";
                
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
    
     public function getAddressClient($id){
        try{
          
            if($this->db->connection()){
                $data = array();
                $query = "SELECT * FROM client_address WHERE client_address_id = '$id' LIMIT 1 ";
                
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

