<?php

 include('../Smarty/libs/Smarty.class.php');
 include ('sesiones.php');
 $html=new Smarty;
 
 /**/
 /*echo '<pre>';
 echo print_r($_SESSION['user']);
 echo '</pre>';*/
 
 $html->assign('errors','');
 $html->assign('module_name','Inicio');
 $html->assign('section','home/templates/home');
 $html->assign('sidebar','sidebar');
 $html->assign('header','header');
 
 $html->display("base.tpl");
?>

