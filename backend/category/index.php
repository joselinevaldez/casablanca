<?php

 include('../../Smarty/libs/Smarty.class.php');
  require_once ('../../repository/category.php');
 include ('../sesiones.php');
 $html=new Smarty;
 $html->assign('module_name', 'Categorías');
 
 $errors = $_SESSION['errors'];
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 
 /*OBTENEMOS LISTADO*/
 $category = new category();
 $result = $category->getCategories();

 $html->assign('list', $result['list']);
 
 /*INFORMACIÓN BASE*/
 $html->assign('errors', $errors);
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

