<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/products.php'); 
 require_once ('../../repository/category.php');
 require_once ('../../repository/measurementUnits.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS PRODUCT*/
     $objProduct = new products();
     $resp = $objProduct->getProduct($_GET['id']);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el producto');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/products");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/products");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de producto');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/products");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }

 $html->assign('data', $resp['data']);
 /*INFORMACIÓN BASE*/  
 $objCategory = new category();
 $categories = $objCategory->getCategories(true);
 $objUnit = new measurementUnits(true);
 $units = $objUnit->getMeasurementUnits();
 
 $html->assign('errors','');
 $html->assign('categories',$categories['list']);
 $html->assign('units',$units['list']);
 $html->assign('section','templates/editProduct');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

