<?php
require_once("../../connection/db.php");
class logs {
    private $db;
    private $date;
    public $module;
    public $itemId;
    public $action;
    public $description;
    public function __construct() {
        $this->db = new db();
        
    }

  
    public function saveLog(){
        try{
            $userSession = (object)$_SESSION['user'];
            if($this->db->connection()){
              
                $query = "INSERT INTO logs (description, module, action, item_id, created_by, created_at)
                          VALUES ('$this->description', '$this->module', '$this->action', '$this->itemId', '$userSession->user_id', now());";
              
                $this->db->connection()->query($query);
                $this->db->connection()->close();
                return true;
            } else {
               $this->db->connection()->close();
               return false;
            }
        } catch (Exception $ex) {
            $this->db->connection()->close();
           return false;
        }

    }
}

