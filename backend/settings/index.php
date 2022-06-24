<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/settings.php');
 include ('../sesiones.php');
 $html=new Smarty;
 $html->assign('module_name', 'Configuraciones');
  /*OBTENEMOS CONFIGURACIÓN*/
 $setting = new settings();
 $result = $setting->getSettings();
 
 $errors = $_SESSION['errors'];
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 
 /*INFORMACIÓN BASE*/
 $html->assign('errors', $errors);
 $html->assign('data', $result['data']);
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
 
 //casablancasnacks01
 //casablanca2022
?>

