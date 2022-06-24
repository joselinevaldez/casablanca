<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/category.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS CATEGORY*/
     $objCategory = new category();
     $resp = $objCategory->getCategory($_GET['id']);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro la categoría');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/category");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/category");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de categoría');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/category");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }

 $html->assign('data', $resp['data']);
 /*INFORMACIÓN BASE*/  
 $html->assign('errors','');
 $html->assign('section','templates/editCategory');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

