<?php
class View{
    public static function __callstatic($name,$arguments){
        switch ($name){
            case 'render':
                self::render_view($arguments[0]);
                break;
            case 'rendering':
                self::renderbyinc($arguments[0],$arguments[1]);
                break;
        }
    }


        private static function render_view($view_name , $data=null){
            get_template_part('views/'.$view_name);
        }
        private static function renderbyinc($view_name , $data=null){
            $view_file_path='views/'.$view_name;
            !empty($data)?extract($data):null;
            get_template_part($view_file_path);
        }
    
}