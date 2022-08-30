<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/products.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS POST*/
 if(isset($_POST['id']) && $_POST['id'] != ''){
     //USUARIO EN SESION
     $userSession = (object)$_SESSION['user']; 
     /*OBTENEMOS PRODUCTO*/
     $objProduct = new products();
     $productId = $_POST['id'];
     $resp = $objProduct->getProduct($productId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el producto');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/products");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/products");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE product SET
                  is_active  = '2',
                  deleted_at = now(),
                  deleted_by = '$userSession->user_id'
                  WHERE product_id = '$productId'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Producto eliminado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/products");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al eliminar el producto');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/products");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/products");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de producto');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/products");
    exit;
 }

 
?>

