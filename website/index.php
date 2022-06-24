<?php

 include('../Smarty/libs/Smarty.class.php');
 require_once ('../repository/settings.php');
 $html=new Smarty;
 $url= $_SERVER["REQUEST_URI"];
 if(strpos($url,'website')){
     header('Location: /casablanca');
     exit;
 }

 $setting = new settings();
 $result = $setting->getSettings();
 $html->assign("data", $result['data']);
 $html->display("index.tpl");
?>
