<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/users.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS POST*/
 if(isset($_POST['id']) && $_POST['id'] != ''){
     //USUARIO EN SESION
     $userSession = (object)$_SESSION['user']; 
     /*OBTENEMOS USUARIO*/
     $objUser = new users();
     $userId = $_POST['id'];
     $resp = $objUser->getUser($userId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el usuario');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/users");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/users");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE user SET
                  is_active  = '2',
                  deleted_at = now(),
                  deleted_by = '$userSession->user_id'
                  WHERE user_id = '$userId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Usuario eliminado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/users");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar el usuario');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/users");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/users");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de usuario');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/users");
    exit;
 }

 
?>

