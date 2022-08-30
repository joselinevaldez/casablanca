<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 /*CAPTURAMOS POST*/
 if(isset($_POST['name'])){
    $db = new db();
    $userSession = (object)$_SESSION['user']; 
  
    $data =  (object) $db->escape_array($_POST);
  
   
    if($db->connection()){
        
        
        // prepare and bind
        try{
            $conn = $db->connection();
            $now = date('Y-m-d G:i:s');
            $is_active =1;
            $stmt = $conn->prepare("INSERT INTO client (name, alias, phone, email, description,  is_active, 
                      created_by, created_at, updated_by, updated_at)  
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,? )");
            $stmt->bind_param("sssssissss",$data->name, $data->alias, $data->phone, $data->email, $data->description, $is_active,
                    $userSession->user_id, $now, $userSession->user_id, $now);

            // set parameters and execute
            if(!$stmt->execute()){
                throw new Exception('Error interno en el servidor', 500);
            }
            
            $queryLastId = "SELECT MAX(client_id) AS id FROM client;";
            if($result = $conn->query($queryLastId)){
                $id = $result->fetch_assoc();
                $description = 'Dirección principal';
                //INSERTAMOS DIRECCIÓN PRINCIPAL
                $stmt = $conn->prepare("INSERT INTO client_address (client_id, description, address, is_principal,  is_active, 
                created_by, created_at, updated_by, updated_at)  
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("isssissss",$id['id'], $description, $data->address, $is_active, $is_active,
                    $userSession->user_id, $now, $userSession->user_id, $now);
                if(!$stmt->execute()){
                    throw new Exception('Error interno en el servidor', 500);
                }
            }
           
            
            $conn->close();
            $stmt->close();
            $errors = array('type' => 'success','msg'  => 'Cliente registrado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/customers");
            exit;
        } catch (Exception $ex) {   
            $conn->close();
            $stmt->close();
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
 
 /*INFORMACIÓN BASE*/
  
 $html->assign('errors','');
 $html->assign('section','templates/newCustomer');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

