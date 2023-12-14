<?php
class Autoloadermain{
    public function __construct($type)
    {
        switch ($type){
            case "mainClassTheme":
                $this->mainClassTheme();
                break;
            case "menusDashboardClass":
                $this->menusDashboardClass();
                break;
        }
    }

    private function mainClassTheme()
    {
        spl_autoload_register(function ($class_name) {
            $path = THEME_PATH . '/app/classes/class-' . $class_name . '.php';
            if (file_exists($path)) {
                include $path;
            }
        });
    }

    private function menusDashboardClass()
    {
        spl_autoload_register(function ($class_name) {
            $path = THEME_PATH . '/views/admin/menus/menu-' . $class_name . '.php';
            if (file_exists($path)) {
                include $path;
            }
        });
    }
}