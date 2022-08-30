<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/paquete.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS PAQUETE*/
     $objPaquete = new paquete();
     $resp = $objPaquete->getPaquete($_GET['id']);
     $products = $objPaquete->getProductsPaquete($_GET['id']);
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el paquete');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/paquetes");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/paquetes");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de paquete');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/paquetes");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }

 $html->assign('data', $resp['data']);
 
 $html->assign('products', json_encode($products['list']));
 /*INFORMACIÓN BASE*/  
 $html->assign('errors','');
 $html->assign('section','templates/editPaquete');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

