<?php

class Calldynamicmenu
{
    public function addMenu($menu_Name)
    {
        $a=new $menu_Name();
        $a->addLiMenu();
    }

    public function returnContentMenu($menu_name)
    {
        $a=new $menu_name();
        $a->addContentMenu();
    }

}
