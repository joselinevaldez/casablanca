<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/customers.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 $errors = $_SESSION['errors'];
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS CUSTOMER*/
     $objCustomer = new customers();
     $resp = $objCustomer->getCustomer($_GET['id']);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el cliente');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customers");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/customers");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de cliente');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/customers");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }
$address = $objCustomer->getAddress($_GET['id']);

 $html->assign('data', $resp['data']);
 $html->assign('address', $address['list']);
 /*INFORMACIÓN BASE*/  
 $html->assign('errors',$errors);
 $html->assign('section','templates/editCustomer');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

