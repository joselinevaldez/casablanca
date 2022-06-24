<?php
require_once("../../connection/db.php");
class roles {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }
    
    public function getRolesSelect(){
        try{
          
            if($this->db->connection()){
                $roles = array();
                $query = "SELECT role_id, name FROM role WHERE is_active = 1 ORDER BY role_id ASC; ";
                
                $result = $this->db->connection()->query($query);
                $this->db->connection()->close();
                while($row=$result->fetch_assoc()){
                    $roles[]=$row;
                }
                
                return array(
                  "status" => 200,
                  "list"   => $roles
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

