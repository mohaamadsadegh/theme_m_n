<?php
add_action('init',function (){
    Asset::css('admin-rtl.css','admin-rtl');
    Asset::css('font-awesome.min.css','font-awesome-min');
    Asset::js('min.js','dashboard-min');
    Asset::js('jquary.js','jquery_script');
    wp_enqueue_script('media-upload');
    include THEME_PATH.'/assets/css/style.php';
});

//includes
include "constants.php";
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
//Save data changed
add_action('wp_ajax_adminchangeddata', function (){
    $value=$_POST['changed_val'];
    $name=$_POST['changed_name'];
    $db = new db();
    $db->query('updateQuery',"data_value","data_name='$name'",Database_Admin,$value);
    die();
});
add_action('wp_ajax_sendwidgetdata', function (){
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        if ($_POST['action']=="sendwidgetdata"){
            echo $_FILES['file']['name'];
        }
    }
    die();
});