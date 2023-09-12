<?php
class Asset{
    public static function __callstatic($name,$arguments){
        switch($name){
            case 'css':
                self::css($arguments[0]);
            break;
            case 'js':
                self::js($arguments[0]);
            break;    
            case 'image':
                self::image($arguments[0]);
            break;
        }

    }
    private static function css($file_name){
        $file_url=THEME_URL.'/assets/css/'.$file_name;
        echo $file_url;
    }
    
    public static function js($file_name){
        $file_url=THEME_URL.'/assets/js/'.$file_name;
        echo $file_url;
    }   
    public static function image($file_name){
        $file_url=THEME_URL.'/assets/image/'.$file_name;
        echo $file_url;
     }
}