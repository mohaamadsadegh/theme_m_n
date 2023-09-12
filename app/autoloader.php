<?php
class Autoloader{
    public function __construct(){
        spl_autoload_register([$this,'autoload']);
    }
    public function autoload($class_name){
        $class = strtolower($class_name);
        $class = 'class-'.$class;
        $file_name = $class.'.php';
        
        $file= THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$file_name;
        
        if(is_file($file)&&is_readable($file)&&file_exists($file)){
            include "$file";
        }
    }
}
new Autoloader();