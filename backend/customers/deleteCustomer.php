<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/customers.php');
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
     $objCustomer = new customers();
     $customerId = $_POST['id'];
     $resp = $objCustomer->getCustomer($customerId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el cliente');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customers");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customers");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
       
         try{
            $conn = $db->connection();
            $now = date('Y-m-d G:i:s');
            $is_active = 2;
            $stmt = $conn->prepare("UPDATE client SET  is_active = ?, deleted_by = ?, deleted_at = ? WHERE client_id = ?");
            $stmt->bind_param("iisi", $is_active, $userSession->user_id, $now, $customerId);

            // set parameters and execute
            if(!$stmt->execute()){
                throw new Exception('Error interno en el servidor', 500);
            }
            
            $stmt->close();
            $conn->close();
            $errors = array('type' => 'success','msg'  => 'Cliente eliminado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/customers");
            exit;
       } catch (Exception $ex) {
            $stmt->close();
            $conn->close();
            $errors = array('type' => 'error','msg'  => $ex->getMessage());
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/customers");
            exit;
       }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customers");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID del cliente');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/customers");
    exit;
 }

 
?>

