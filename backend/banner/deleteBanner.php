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
     /*OBTENEMOS BANNER*/
     $objSettings = new settings();
     $bannerId = $_POST['id'];
     $resp = $objSettings->getBanner($bannerId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el banner');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/banner");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/banner");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE configuration_banner SET
                  is_active  = '2'
                  WHERE configuration_banner_id = '$bannerId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Banner eliminado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/banner");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar el banner');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/banner");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/banner");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de banner');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/banner");
    exit;
 }

 
?>

