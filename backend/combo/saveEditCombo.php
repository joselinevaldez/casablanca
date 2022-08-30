<?php

 require_once ('../../repository/combo.php');
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
            
           $error = "No se actualizó el combo, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    
    if($filename == ''){
        $filename = $data->old_file;
    }
    
    $db = new db();
    if($db->connection()){
       
        $query = "UPDATE combo SET
                  code  ='$data->code', 
                  name  ='$data->name', 
                  price  ='$data->price', 
                  is_active = '$data->status',
                  imagen_path = '$filename',                 
                  updated_by = '$userSession->user_id', 
                  updated_at = now()
                  WHERE combo_id = '$data->combo_id'";
       
        if($db->connection()->query($query)){
            
            //eliminamos los productos del combo
            $queryDelete = "DELETE FROM combo_product WHERE combo_id = '$data->combo_id'";
            if($result = $db->connection()->query($queryDelete)){
               
                //INSERTAMOS PRODUCTOS            
                
                $productsIds = explode("|", $data->productosIds);
               
                foreach($productsIds as $product){
                    echo ": ".$product;
                    if($product != ""){
                        $query = "INSERT INTO combo_product (product_id,combo_id, is_active) 
                        VALUES ('$product','$data->combo_id',1);";
                       
                        $result = $db->connection()->query($query);
                        
                    }                  
                }
            }
             $db->connection()->close();
            $errors = array('type' => 'success','msg'  => 'Combo actualizado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/combos");
            exit;
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al actualizar el combo');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/combos");
            exit;
        }
    }else{
         $db->connection()->close();
        $errors = array('type' => 'error','msg'  => 'Ocurrió un error en la comunicación con la base de datos');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/combos");
        exit;
    }
    
   
 }

?>

