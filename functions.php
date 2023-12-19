<?php
add_action('init',function (){
   new Asset('css','admin-rtl.css','admin-rtl');
   new Asset('css','font-awesome.min.css','font-awesome-min');
   new Asset('js','min.js','dashboard-min');
   new Asset('js','jquary.js','jquery_script');
   wp_enqueue_script('media-upload');
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
add_action('wp_ajax_sendwidgetdata', function (){
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        if ($_POST['action']=="sendwidgetdata"){
            print_r($_FILES);
        }
    }
    die();
});
