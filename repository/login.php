<?php
require_once("../connection/db.php");
class login {
    private $db;
    private $date;
    public $username;
    public $password;
    public function __construct() {
        $this->db = new db();
        
    }
    public function login(){
        try{
            $query = "SELECT * FROM user WHERE user.username = '$this->username' AND user.password = '$this->password' LIMIT 1; ";
            $result = $this->db->connection()->query($query);
            
            $user = $result->fetch_assoc();
            $this->db->connection()->close();
            if(!$user){
                return array(
                  "login" => false,
                  "msg"   => "Usuario o contraseña incorrectos"
                );
            }else{
                if($user['is_active'] != 1){
                    return array(
                        "login" => false,
                        "msg"   => "El usuario se encuentra inactivo o eliminado"
                    );
                }else{
                    return array(
                        "login" => true,
                        "msg"   => "Login correcto",
                        "user"  => $user
                    );
                }
                
            }
            
        } catch (Exception $ex){
            $this->db->connection()->close();
            return array(
                "login" => false,
                "msg"   => $ex->getMessage()
            );
        }
    }
   
}

