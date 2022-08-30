<?php

 require_once ('../../repository/users.php');
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
            
           $error = "No se registro el usuario, el archivo no pudo cargarse intenta de nuevo";
        } 
      
        
    }
    
    if($filename == ''){
        $filename = $user->old_logo;
    }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE configuration SET
                  store_name  ='$data->store_name', 
                  email = '$data->email',
                  address = '$data->address',
                  phone = '$data->phone',
                  phone_secondary = '$data->phone_secondary',
                  whatsapp = '$data->whatsapp', 
                  logo_path = '$filename', 
                  information = '$data->information', 
                  mision = '$data->mision', 
                  vision = '$data->vision', 
                  url_facebook = '$data->url_facebook', 
                  url_instagram = '$data->url_instagram', 
                  h_lunes = '$data->h_lunes', 
                  h_martes = '$data->h_martes', 
                  h_miercoles = '$data->h_miercoles', 
                  h_jueves = '$data->h_jueves', 
                  h_viernes = '$data->h_viernes', 
                  h_sabado = '$data->h_sabado', 
                  h_domingo = '$data->h_domingo' ,
                  lat = '$data->lat',
                  lon = '$data->long'
                  WHERE configuration_id = '1'";
       
        if($db->connection()->query($query)){
            $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Configuración actualizada correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/settings");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al actualizar la configuración');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/settings");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/settings");
        exit;
    }
    
   
 }

?>

