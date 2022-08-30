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
     /*OBTENEMOS DIRECCIÓN*/
     $objCustomer = new customers();
     $addressId = $_POST['id'];
     $clientId = $_POST['client_id'];
     $resp = $objCustomer->getAddressClient($addressId);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro la dirección');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customer-edit/$clientId");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customer-edit/$clientId");
        exit;
     }
    
    $db = new db();
    if($db->connection()){
        try{
            $conn = $db->connection();
            $now = date('Y-m-d G:i:s');
            $is_active = 2;
            $stmt = $conn->prepare("UPDATE client_address SET is_active = ?, deleted_by = ?, deleted_by = ? WHERE client_address_id = ?");
            $stmt->bind_param("iisi",$is_active, $userSession->user_id, $now, $addressId);

            // set parameters and execute
            if(!$stmt->execute()){
                throw new Exception('Error interno en el servidor', 500);
            }
            
            $stmt->close();
            $conn->close();
            $errors = array('type' => 'success','msg'  => 'Dirección eliminada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/customer-edit/{$clientId}");
            exit;
       } catch (Exception $ex) {
            $stmt->close();
            $conn->close();
            $errors = array('type' => 'error','msg'  => $ex->getMessage());
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/customer-edit/{$clientId}");
            exit;
       }
        
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
         header("location:/casablanca/customer-edit/$clientId");
        exit;
    }
     
     
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de la dirección');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/customers");
    exit;
 }

 
?>

