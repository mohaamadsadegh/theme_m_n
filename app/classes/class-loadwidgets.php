<?php

class Loadwidgets
{
    public static function loadWidget($id, $name, $description, $type, $options = [])
    {
        if (isset($type)) {
            include THEME_admin_widgets . "widgetBase.php";
        } else {
            echo "نوع ویجت مورد نظر انتخاب نشده";
        }
    }
}