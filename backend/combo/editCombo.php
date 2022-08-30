<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/combo.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS COMBO*/
     $objCombo = new combo();
     $resp = $objCombo->getCombo($_GET['id']);
     $products = $objCombo->getProductsCombo($_GET['id']);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el combo');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/combos");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/combos");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de combo');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/combos");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }

 
 $html->assign('data', $resp['data']);
 $html->assign('products', json_encode($products['list']));
 /*INFORMACIÓN BASE*/  
 $html->assign('errors','');
 $html->assign('section','templates/editCombo');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

