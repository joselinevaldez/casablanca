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
           
            return $connection;
            
        } catch (Exception $ex) {
            return false;
        }
       

    }
   
}
