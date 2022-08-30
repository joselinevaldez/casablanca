<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/settings.php');
 include ('../sesiones.php');
 $html=new Smarty;
 $html->assign('module_name', 'Configuración banners');
 $errors = $_SESSION['errors'];
 /*OBTENEMOS CONFIGURACIÓN*/
 $setting = new settings();
 $result = $setting->getBanners(); 
  
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 
 /*INFORMACIÓN BASE*/
 $html->assign('errors', $errors);
 $html->assign('list',$result['list']);
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

