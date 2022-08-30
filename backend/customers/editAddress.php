<?php

 require_once ('../../repository/customers.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');

 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';

 if(isset($_POST)){
     $db = new db();
    $userSession = (object)$_SESSION['user']; 
    $data = (object) $db->escape_array($_POST);
    
    if($db->connection()){
       try{
            $conn = $db->connection();
            $description = 'Dirección principal';
            $is_principal = 0;
            $is_active = 1;
            $now= date('Y-m-d G:i:s');
            //INSERTAMOS DIRECCIÓN PRINCIPAL
            $stmt = $conn->prepare("UPDATE client_address SET
                  address  = ?, 
                  description = ?,             
                  updated_by = ?, 
                  updated_at = ?
                  WHERE client_address_id = ?");
                $stmt->bind_param("ssisi",$data->address, $data->description, $userSession->user_id, $now, $data->client_address_id);
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

?>

