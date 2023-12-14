<?php
add_action('init',function (){
   new Asset('css','admin-rtl.css','admin-rtl');
   new Asset('css','font-awesome.min.css','font-awesome-min');
   new Asset('js','min.js','dashboard-min');
   new Asset('js','jquary.js','jquery_script');
});



//includes
include "constants.php";

//autoload
include "autoloadermain.php";
new Autoloadermain('mainClassTheme');
new addmenu();
new Autoloadermain('menusDashboardClass');

//ajax dashboard
add_action('wp_ajax_sendAjaxMenuName', function (){
    $Calldynamicmenu=new Calldynamicmenu();
    $Calldynamicmenu->returnContentMenu($_POST['menu_name']);
die();
});
