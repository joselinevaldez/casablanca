<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;

 /*CAPTURAMOS POST*/

 if(isset($_POST['save'])){
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
            
           $error = "No se registro el banner, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    $db = new db();
    if($db->connection()){
        
        $query = "INSERT INTO configuration_banner (title, subtitle,imagen_path, is_active) 
                  VALUES ('$data->title','$data->subtitle','$filename', 1);";
       
        if($db->connection()->query($query)){
            
            $db->connection()->close();
          
            $errors = array('type' => 'success','msg'  => 'Banner registrado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/banner");
            exit;
            
            
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar el banner');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/banner");
            exit;
        }
    }else{
        $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/banner");
        exit;
    }
    
   
       
       
 }
 
 /*INFORMACIÓN BASE*/
  
 $html->assign('errors','');
 $html->assign('section','templates/newBanner');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

