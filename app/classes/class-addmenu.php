<?php
class addmenu{
    public function __construct()
    {
        //add menu
        add_action( 'admin_menu' , function () {
            add_menu_page('تنظیمات قالب','تنظیمات قالب','manage_options','theme_setting','theme_setting','',6);
        });
        function theme_setting(){
            include THEME_PATH.'/views/admin/factor-submenu-main.php';
        }
    }
}
