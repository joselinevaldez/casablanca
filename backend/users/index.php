<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/users.php');
 include ('../sesiones.php');
 $html=new Smarty;
 
 $errors = $_SESSION['errors'];
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 
 /*OBTENEMOS LISTADO*/
 $user = new users();
 $result = $user->getUsers();

 $html->assign('list', $result['list']);
 
 /*INFORMACIÓN BASE*/
 $html->assign('errors', $errors);
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

