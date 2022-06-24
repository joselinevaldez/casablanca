<?php

 require_once ('../../repository/category.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');

 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';

 if(isset($_POST)){
    $userSession = (object)$_SESSION['user']; 
    $data =  (object)$_POST;
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
            
           $error = "No se actualizó la categoría, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    
    if($filename == ''){
        $filename = $data->old_file;
    }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE category SET
                  name  ='$data->name', 
                  is_active = '$data->status',
                  imagen_path = '$filename',                 
                  updated_by = '$userSession->user_id', 
                  updated_at = now()
                  WHERE category_id = '$data->category_id'";
       
        if($db->connection()->query($query)){
             $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Categoría actualizada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/category");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al actualizar la categoría');
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

?>

