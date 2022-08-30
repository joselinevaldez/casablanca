<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/settings.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS POST*/
 if(isset($_POST['id']) && $_POST['id'] != ''){
     //USUARIO EN SESION
     $userSession = (object)$_SESSION['user']; 
     /*OBTENEMOS SERVICES*/
     $objSettings = new settings();
     $serviceId = $_POST['id'];
     $resp = $objSettings->getService($serviceId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el servicio');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/settings");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/settings");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE configuration_services SET
                  is_active  = '2'
                  WHERE configuration_services_id = '$serviceId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Servicio eliminado correctamente');
            $_SESSION['errors'] = $errors;
             header("location:/casablanca/settings");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar el servicio');
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
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID del servicio');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/settings");
    exit;
 }

 
?>

