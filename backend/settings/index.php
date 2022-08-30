<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/settings.php');
 include ('../sesiones.php');
 $html=new Smarty;
 $html->assign('module_name', 'Configuraciones');
  /*OBTENEMOS CONFIGURACIÓN*/
 $setting = new settings();
 $result = $setting->getSettings();
 $services = $setting->getServices();
 $errors = $_SESSION['errors'];
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 
 /*INFORMACIÓN BASE*/
 $html->assign('errors', $errors);
 $html->assign('services',$services['list']);
 $html->assign('data', $result['data']);
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
 
 //casablancasnacks01
 //casablanca2022
 
 //sitio
 //casablancasnacks
 //casablanca2022
 
 //sysadmin
 //obqjr*6>aKJ<iPfh
//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
?>

