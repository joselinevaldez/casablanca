<?php

 include('../../Smarty/libs/Smarty.class.php');
 include ('../sesiones.php');
 $html=new Smarty;
 $html->assign('module_name', 'Reportes');
 
 /*INFORMACIÓN BASE*/
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

