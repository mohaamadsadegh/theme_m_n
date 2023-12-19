<?php
class Asset{
    public static function css ($filename,$handler=''){
                wp_enqueue_style($handler, THEME_URL.'/assets/css/'.$filename, [], Version);
    }
    public static function js ($filename,$handler=''){
                wp_enqueue_script($handler, THEME_URL.'/assets/js/'.$filename, ['jquery'], Version);
    }
    public static function image ($filename){
                $file_url=THEME_URL.'/assets/image/'.$filename;
                echo $file_url;
    }
}