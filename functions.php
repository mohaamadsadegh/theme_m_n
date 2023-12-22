<?php
add_action('init',function (){
    Asset::css('admin-rtl.css','admin-rtl');
    Asset::css('font-awesome.min.css','font-awesome-min');
    Asset::js('min.js','dashboard-min');
    Asset::js('jquary.js','jquery_script');
    wp_enqueue_script('media-upload');
//    include THEME_PATH.'/assets/css/style.php';
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
            $target_dir = wp_upload_dir();
            $target_file = $target_dir['basedir']."/" . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            //check is image
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false) {
//                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
//                echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
//                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["file"]["size"] > 50000) {
//                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
//                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo $target_file;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
    die();
});