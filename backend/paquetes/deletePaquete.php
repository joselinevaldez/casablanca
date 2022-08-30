<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/paquete.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS POST*/
 if(isset($_POST['id']) && $_POST['id'] != ''){
   
     //USUARIO EN SESION
     $userSession = (object)$_SESSION['user']; 
     /*OBTENEMOS PAQUETE*/
     $objPaquete = new paquete();
     $paqueteId = $_POST['id'];
     $resp = $objPaquete->getPaquete($paqueteId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el paquete');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/paquetes");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/paquetes");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE paquete SET
                  is_active  = '2',
                  deleted_at = now(),
                  deleted_by = '$userSession->user_id'
                  WHERE paquete_id = '$paqueteId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Paquete eliminado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/paquetes");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar el paquete');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/paquetes");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/paquetes");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de paquete');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/paquetes");
    exit;
 }

 
?>

