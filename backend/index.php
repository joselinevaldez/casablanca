<?php

 include('../Smarty/libs/Smarty.class.php');
 require_once ('../repository/login.php');
 session_start();
 $html=new Smarty;
  if(isset($_POST['login'])){
     $loginObj = new login();
     $loginObj->username = $_POST['username'];
     $loginObj->password = $_POST['password'];
     $login = $loginObj->login();
     if($login['login']){
        $_SESSION['errors'] = "";
        $_SESSION['user'] = $login['user'];
        header('Location: /casablanca/home');
        exit;
     }else{
        header('Location: /casablanca/login');
        exit;
     }
     
      
    
    
 }
 $url= $_SERVER["REQUEST_URI"];
 if(strpos($url,'backend')){
     header('Location: /casablanca');
     exit;
 }
 

 $html->display("login.tpl");
?>

