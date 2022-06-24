<?php

 require_once ('../../repository/measurementUnits.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');

 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';

 if(isset($_POST)){
    $userSession = (object)$_SESSION['user']; 
    $data =  (object)$_POST;
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE measurement_unit SET
                  name  ='$data->name', 
                  is_active = '$data->status',             
                  updated_by = '$userSession->user_id', 
                  updated_at = now()
                  WHERE measurement_unit_id = '$data->measurement_unit_id'";
       
        if($db->connection()->query($query)){
             $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Unidad de medida actualizada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/measurementUnits");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al actualizar la unidad de medida');
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

?>

