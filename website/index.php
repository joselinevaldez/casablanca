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
 $banners = $setting->getBanners();
 $services = $setting->getServices();
 $html->assign("data", $result['data']);
 $html->assign("banners", $banners['list']);
 $html->assign("services", $services['list']);
 $html->display("index.tpl");
?>
