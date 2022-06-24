<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/category.php');
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
     $objCategory = new category();
     $categoryId = $_POST['id'];
     $resp = $objCategory->getCategory($categoryId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro la categoría');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/category");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/category");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE category SET
                  is_active  = '2',
                  deleted_at = now(),
                  deleted_by = '$userSession->user_id'
                  WHERE category_id = '$categoryId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Categoría eliminada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/category");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar la categoría');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/category");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/category");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de categoría');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/category");
    exit;
 }

 
?>

