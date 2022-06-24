<?php
require_once("../../connection/db.php");
class users {
    private $db;
    private $date;
    public function __construct() {
        $this->db = new db();
        
    }

    public function getUsers(){
        try{
          
            if($this->db->connection()){
                $users = array();
                $query = "SELECT user.*, role.name AS role FROM user LEFT JOIN role ON role.role_id = user.role_id WHERE user.is_active = 1 ORDER BY user_id ASC; ";
                
                $result = $this->db->connection()->query($query);
                while($row=$result->fetch_assoc()){
                    $users[]=$row;
                }
                $this->db->connection()->close();
                return array(
                  "status" => 200,
                  "list"   => $users
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
    public function getUser($id){
        try{
          
            if($this->db->connection()){
                $user = array();
                $query = "SELECT user_id, user.username, user.name, imagen_path, email, user.is_active, user.role_id, user.created_by, user.created_at, user.updated_by, user.updated_at, user.deleted_by, user.deleted_at, role.name AS role FROM user LEFT JOIN role ON role.role_id = user.role_id WHERE user.user_id = '$id' LIMIT 1; ";
                
                $result = $this->db->connection()->query($query);
                $user=$result->fetch_assoc();
                $this->db->connection()->close();
                return array(
                  "status" => 200,
                  "data"   => $user
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

