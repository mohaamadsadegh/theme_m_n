<?php
class Asset{
    public  function __construct($format,$filename,$handler=''){
        switch($format){
            case 'css':
                wp_enqueue_style($handler, THEME_URL.'/assets/css/'.$filename, [], Version);
            break;
            case 'js':
                wp_enqueue_script($handler, THEME_URL.'/assets/js/'.$filename, ['jquery'], Version);
            break;    
            case 'image':
                $file_url=THEME_URL.'/assets/image/'.$filename;
                echo $file_url;
            break;
        }

    }
}