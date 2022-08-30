<?php

 require_once ('../../repository/users.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');

 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';

 if(isset($_POST)){
    $data = (object) $_POST;
    $db = new db();
    if($db->connection()){
       
        $query = "INSERT INTO configuration_services (name,is_active) VALUES ('$data->name', 1)";
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Servicio agregado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/settings");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al agregar el servicio');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/settings");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/settings");
        exit;
    }
    
   
 }

?>

