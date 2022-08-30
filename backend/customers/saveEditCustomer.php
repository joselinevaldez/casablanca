<?php

 require_once ('../../repository/customers.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');

 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';

 if(isset($_POST)){
    $db = new db();
    $userSession = (object)$_SESSION['user']; 
    $data =  (object) $db->escape_array($_POST);
   
    if($db->connection()){
       try{
            $conn = $db->connection();
            $now = date('Y-m-d G:i:s');
            $stmt = $conn->prepare("UPDATE client SET name = ?, alias = ?, phone = ?, description = ?, email  = ?,  is_active = ?, updated_by = ?, updated_at = ? WHERE client_id = ?");
            $stmt->bind_param("sssssiisi",$data->name, $data->alias, $data->phone, $data->description, $data->email, $data->status, $userSession->user_id, $now, $data->client_id);

            // set parameters and execute
            if(!$stmt->execute()){
                throw new Exception('Error interno en el servidor', 500);
            }
            
            $stmt->close();
            $conn->close();
            $errors = array('type' => 'success','msg'  => 'Cliente actualizado correctamente');
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
    
   
 }

?>

