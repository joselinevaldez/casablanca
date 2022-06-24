<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/roles.php');
 require_once ('../../repository/users.php');
 require_once ('../../connection/db.php');
 include ('../sesiones.php');
 $html=new Smarty;
 /*OBTENEMOS LISTADO DE ROLES*/
 $roles = new roles();
 $result = $roles->getRolesSelect();
 
 /*LIMPIAMOS LOS ERRORES*/
 $_SESSION['errors'] = '';
 
 /*CAPTURAMOS GET*/
 if(isset($_GET['id']) && $_GET['id'] != ''){
     /*OBTENEMOS USUARIO*/
     $objUser = new users();
     $resp = $objUser->getUser($_GET['id']);
   
     if($resp['status'] == 200 && count($resp['data']) == ''){
        $errors = array('type' => 'error','msg'  => 'No se encontro el usuario');
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/users");
        exit;
     }
     
     if($resp['status'] == 500){
        $errors = array('type' => 'error','msg'  => $resp['msg']);
        $_SESSION['errors'] = $errors;
        header("location:/casablanca/users");
        exit;
     }
    
 }else{
    $errors = array('type' => 'error','msg'  => 'Proporcione un ID de usuario');
    $_SESSION['errors'] = $errors;
    header("location:/casablanca/users");
    exit;
 }
 
 /*POST EDIT*/
 if(isset($_POST['save'])){
     
 }

 $html->assign('data', $resp['data']);
 $html->assign('roles', $result['list']);
 /*INFORMACIÓN BASE*/  
 $html->assign('errors','');
 $html->assign('section','templates/editUser');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

