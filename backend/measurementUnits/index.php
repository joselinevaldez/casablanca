<?php

 include('../../Smarty/libs/Smarty.class.php');
 require_once ('../../repository/measurementUnits.php');
 include ('../sesiones.php');
 $html=new Smarty;
 $html->assign('module_name', 'Unidades de medida');

 $errors = $_SESSION['errors'];
 /* LIMPIAMOS LOS ERRORES */
 $_SESSION['errors'] = "";
 
 /*OBTENEMOS LISTADO*/
 $units = new measurementUnits();
 $result = $units->getMeasurementUnits();

 $html->assign('list', $result['list']);
 
 /*INFORMACIÓN BASE*/
 $html->assign('errors', $errors);
 $html->assign('section','templates/index');
 $html->assign('sidebar','../templates/sidebar');
 $html->assign('header','../templates/header');
 $html->display("../templates/base.tpl");
?>

