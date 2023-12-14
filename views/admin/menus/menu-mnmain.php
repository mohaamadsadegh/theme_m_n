<?php
class MNmain{
    public $name,$title,$icon;

    public function addLiMenu()
    {
        include THEME_PATH."/views/admin/limenu.php";
    }
    public function addContentMenu()
    {
        include THEME_PATH."/views/admin/contentmenu.php";
    }
}