<?php

class Loadwidgets
{
    public function __construct($id, $name, $description, $type, $options = [])
    {
        if (isset($type)) {
            include THEME_widgets . "widgetBase.php";
        } else {
            echo "نوع ویجت مورد نظر انتخاب نشده";
        }
    }
}