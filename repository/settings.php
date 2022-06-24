<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/casablanca/connection/db.php");
class settings {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }

   
    public function getSettings(){
        try{
          
            if($this->db->connection()){
                $settings = array();
                $query = "SELECT * FROM configuration WHERE configuration_id = 1 LIMIT 1";
                
                $result = $this->db->connection()->query($query);
                $settings=$result->fetch_assoc();
                $this->db->connection()->close();
                return array(
                  "status" => 200,
                  "data"   => $settings
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

