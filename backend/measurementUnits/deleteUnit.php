<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/measurementUnits.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS POST*/
 if(isset($_POST['id']) && $_POST['id'] != ''){
     //USUARIO EN SESION
     $userSession = (object)$_SESSION['user']; 
     /*OBTENEMOS CATEGORÍA*/
     $objUnit = new measurementUnits();
     $unitId = $_POST['id'];
     $resp = $objUnit->getMeasurementUnit($unitId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro la unidad de medida');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/measurementUnits");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/measurementUnits");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE measurement_unit SET
                  is_active  = '2',
                  deleted_at = now(),
                  deleted_by = '$userSession->user_id'
                  WHERE measurement_unit_id = '$unitId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Unidad de medida eliminada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/measurementUnits");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar la unidad de medida');
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
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de la unidad de medida');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/measurementUnits");
    exit;
 }

 
?>

