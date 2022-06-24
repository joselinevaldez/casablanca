<?php
    session_start();
    if(!isset($_SESSION['user'])) {        
        session_start(); //to ensure you are using same session
        session_destroy(); //destroy the session        
        header("location:/casablanca/login"); //to redirect back to "login"
        exit();
    }
 ?>  


