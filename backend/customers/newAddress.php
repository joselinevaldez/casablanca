<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 /*CAPTURAMOS POST*/
 if(isset($_POST['address'])){
    $db = new db();
    $userSession = (object)$_SESSION['user']; 
  
    $data = (object) $db->escape_array($_POST);
    
    if($db->connection()){
        // prepare and bind
        try{
            $conn = $db->connection();
            $description = 'Dirección principal';
            $is_principal = 0;
            $is_active = 1;
            $now= date('Y-m-d G:i:s');
            //INSERTAMOS DIRECCIÓN PRINCIPAL
            $stmt = $conn->prepare("INSERT INTO client_address (client_id, description, address, is_principal,  is_active, 
            created_by, created_at, updated_by, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
                $stmt->bind_param("issiiisis",$data->client_id, $data->description, $data->address, $is_principal, $is_active,
                $userSession->user_id, $now, $userSession->user_id, $now);
            if(!$stmt->execute()){
                throw new Exception('Error interno en el servidor', 500);
            }
            
            $conn->close();
            $stmt->close();
            $errors = array('type' => 'success','msg'  => 'Dirección registrada correctamente');
            $_SESSION['errors'] = $errors;
             header("location:/casablanca/customer-edit/{$data->client_id}");
            exit;
        } catch (Exception $ex) {   
            $conn->close();
            $stmt->close();
            $errors = array('type' => 'error','msg'  => $ex->getMessage());
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/customer-edit/{$data->client_id}");
            exit;
        }
        
    }else{
        $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
         header("location:/casablanca/customer-edit/{$data->client_id}");
        exit;
    }
    
   
       
       
 }
 header("location:/casablanca/customers");
 exit;
?>

