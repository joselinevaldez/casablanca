<?php

class db {
    
    private $serverName = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "casablanca";
    public function connection()
    {
        try{
          
            $connection=new mysqli($this->serverName, $this->username, $this->password, $this->db);
            mysqli_set_charset($connection, 'utf8'); //linea a colocar
            return $connection;
            
        } catch (Exception $ex) {
            return false;
        }
       

    }
    
    public function escape_array($data){
        $response = array();
        foreach($data as $key => $value){
            $value = str_replace("'", "", $value);
            $value = addslashes($value);
            $value = str_replace("\n", " ", $value);
            $response[$key] = addslashes($value);
        }
        return $response;
        
    }
    
   
}
