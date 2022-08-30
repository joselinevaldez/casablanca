<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/combo.php');
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
     $objCombo = new combo();
     $comboId = $_POST['id'];
     $resp = $objCombo->getCombo($comboId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el combo');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/combos");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/combos");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE combo SET
                  is_active  = '2',
                  deleted_at = now(),
                  deleted_by = '$userSession->user_id'
                  WHERE combo_id = '$comboId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Combo eliminado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/combos");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar el combo');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/combos");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/combos");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de combo');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/combos");
    exit;
 }

 
?>

