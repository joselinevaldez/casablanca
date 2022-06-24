<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/roles.php');
 require_once ('../../repository/logs.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 /*LOGS*/
 $logs = new logs();
 /*OBTENEMOS LISTADO DE ROLES*/
 $roles = new roles();
 $result = $roles->getRolesSelect();
 
 /*CAPTURAMOS POST*/
 if(isset($_POST['name'])){
    $userSession = (object)$_SESSION['user']; 
   
    $user =  (object)$_POST;
     //Recogemos el archivo enviado por el formulario
    $file = $_FILES['file']['name'];
    $filename = "";
    //Si el archivo contiene algo y es diferente de vacio
    if (isset($file) && $file != "") {
        //Obtenemos algunos datos necesarios sobre el archivo
        $file_name = $_FILES['file']['name'];
        $ext = explode('.', $file_name);
        
        $filename="img".date('YmdGis').".".$ext[1];
        $path = "files/$filename";
        $error ="";
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
            
           $error = "No se registro el usuario, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    $db = new db();
    if($db->connection()){
        $query = "INSERT INTO user (name, email, imagen_path, username, password, role_id, is_active, 
                  created_by, created_at, updated_by, updated_at, deleted_by, deleted_at) 
                  VALUES ('$user->name','$user->email' , '$filename', '$user->username', '$user->password', '$user->role', 1, 
                  '$userSession->user_id', now(), '$userSession->user_id', now(), NULL, NULL);";
       
        if($db->connection()->query($query)){
            
            /*GUARDAMOS LOGS*/
            $logs->action = 'crear';
            $logs->module = 'Usuarios';
            $logs->description = "Registro un nuevo usuario - Nombre: {$user->name}";
            $logs->itemId = $db->connection()->insert_id;
            
            $db->connection()->close();
            if($logs->saveLog()){
                $errors = array('type' => 'success','msg'  => 'Usuario registrado correctamente');
                $_SESSION['errors'] = $errors;
                header("location:/casablanca/users");
                exit;
            }
            
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar el usuario');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/users");
            exit;
            
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar el usuario');
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
    
   
       
       
 }
 
 

 $html->assign('roles', $result['list']);
 /*INFORMACIÓN BASE*/
  
 $html->assign('errors','');
 $html->assign('section','templates/newUser');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

