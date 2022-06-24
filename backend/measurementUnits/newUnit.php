<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 /*CAPTURAMOS POST*/
 if(isset($_POST['name'])){
    $userSession = (object)$_SESSION['user']; 
  
    $data =  (object)$_POST;
   
    $db = new db();
    if($db->connection()){
        $query = "INSERT INTO measurement_unit (name, is_active, 
                  created_by, created_at, updated_by, updated_at, deleted_by, deleted_at) 
                  VALUES ('$data->name', 1, '$userSession->user_id', now(), '$userSession->user_id', now(), NULL, NULL);";
       
        if($db->connection()->query($query)){
            
            $db->connection()->close();
          
            $errors = array('type' => 'success','msg'  => 'Unidad de medida registrada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/measurementUnits");
            exit;
            
            
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar la unidad de medida');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/measurementUnits");
            exit;
        }
    }else{
        $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/measurementUnits");
        exit;
    }
    
   
       
       
 }
 
 /*INFORMACIÓN BASE*/
  
 $html->assign('errors','');
 $html->assign('section','templates/newUnit');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

