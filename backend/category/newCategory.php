<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

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
            
           $error = "No se registro la categoría, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    $db = new db();
    if($db->connection()){
        $query = "INSERT INTO category (name, imagen_path, is_active, 
                  created_by, created_at, updated_by, updated_at, deleted_by, deleted_at) 
                  VALUES ('$user->name','$filename', 1, '$userSession->user_id', now(), '$userSession->user_id', now(), NULL, NULL);";
       
        if($db->connection()->query($query)){
            
            $db->connection()->close();
          
            $errors = array('type' => 'success','msg'  => 'Categoría registrada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/category");
            exit;
            
            
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar la categoría');
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
    
   
       
       
 }
 
 /*INFORMACIÓN BASE*/
  
 $html->assign('errors','');
 $html->assign('section','templates/newCategory');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

