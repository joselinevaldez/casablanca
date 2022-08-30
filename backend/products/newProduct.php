<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../connection/db.php');
 require_once ('../../repository/category.php');
 require_once ('../../repository/measurementUnits.php');
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
            
           $error = "No se registro el producto, el archivo no pudo cargarse intenta de nuevo";
        } 
    }
    $db = new db();
    if($db->connection()){
       
        $purchase_price = str_replace(',','', $data->purchase_price);
        $sale_price = str_replace(',','', $data->sale_price);
        $query = "INSERT INTO product (code,name, image_path,purchase_price,sale_price,measurement_unit_id, category_id, is_active, 
                  created_by, created_at, updated_by, updated_at, deleted_by, deleted_at) 
                  VALUES ('$data->code','$data->name','$filename',$purchase_price,$sale_price,'$data->unit', '$data->category', 1, '$userSession->user_id', now(), '$userSession->user_id', now(), NULL, NULL);";
       
        if($db->connection()->query($query)){
            
            $db->connection()->close();
          
            $errors = array('type' => 'success','msg'  => 'Producto registrado correctamente');
            $_SESSION['errors'] = $errors;
            header("location:/casablanca/products");
            exit;
            
            
        }else{
             $db->connection()->close();
            $errors = array('type' => 'error','msg'  => 'Ocurrió un error al registrar el producto');
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
 
 /*INFORMACIÓN BASE*/
 $objCategory = new category();
 $categories = $objCategory->getCategories(true);
 $objUnit = new measurementUnits(true);
 $units = $objUnit->getMeasurementUnits();
 $html->assign('errors','');
 $html->assign('categories',$categories['list']);
 $html->assign('units',$units['list']);
 $html->assign('section','templates/newProduct');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

