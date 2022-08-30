<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
  
 require_once ('../../repository/products.php');
 include ('../sesiones.php');
 $html=new Smarty;

 /*CAPTURAMOS POST*/
 if(isset($_POST['name'])){
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
            
           $error = "No se registro el combo, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    $db = new db();
    if($db->connection()){
        $query = "INSERT INTO combo (code,name, price, imagen_path, is_active, 
                  created_by, created_at, updated_by, updated_at, deleted_by, deleted_at) 
                  VALUES ('$data->code','$data->name', '$data->price','$filename', 1, '$userSession->user_id', now(), '$userSession->user_id', now(), NULL, NULL);";
       
        if($db->connection()->query($query)){
            
            $queryLastId = "SELECT MAX(combo_id) AS id FROM combo;";
            if($result = $db->connection()->query($queryLastId)){
                $id = $result->fetch_assoc();
                //INSERTAMOS DIRECCIÓN PRINCIPAL
              
                
                $productsIds = explode("|", $data->productosIds);
               
                foreach($productsIds as $product){
                    echo ": ".$product;
                    if($product != ""){
                        $query = "INSERT INTO combo_product (product_id,combo_id, is_active) 
                        VALUES ('$product','{$id['id']}',1);";
                       
                        $result = $db->connection()->query($query);
                        
                    }                  
                }
            }
            
            $db->connection()->close();
           
            $errors = array('type' => 'success','msg'  => 'Combo registrado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/combos");
            exit;
            
            
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar el combo');
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
 
 /*PRODUCTOS*/
 $objProduct = new products();
 $products = $objProduct->getProducts();
 $html->assign('products', json_encode($products['list']));
 /*INFORMACIÓN BASE*/
  
 $html->assign('errors','');
 $html->assign('section','templates/newCombo');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

