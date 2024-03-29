<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/settings.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS UNIT*/
     $objSettings = new settings();
     $resp = $objSettings->getBanner($_GET['id']);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el banner');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/banner");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/banner");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de banner');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/banner");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }

 $html->assign('data', $resp['data']);
 /*INFORMACIÓN BASE*/  
 $html->assign('errors','');
 $html->assign('section','templates/editBanner');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

