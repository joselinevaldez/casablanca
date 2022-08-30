<?php

 require_once ('../../repository/products.php');
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
            
           $error = "No se actualizó el producto, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    
    if($filename == ''){
        $filename = $data->old_file;
    }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE product SET
                    code = '$data->code', 
                    name = '$data->name',
                    image_path = '$filename',
                    purchase_price = '$data->purchase_price',
                    sale_price = '$data->sale_price',
                    measurement_unit_id = '$data->unit',
                    category_id = '$data->category',
                    is_active = '$data->status',            
                    updated_by = '$userSession->user_id', 
                    updated_at = now()
                  WHERE product_id = '$data->product_id'";
       
        if($db->connection()->query($query)){
             $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Producto actualizado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/products");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al actualizar el producto');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/products");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/products");
        exit;
    }
    
   
 }

?>

