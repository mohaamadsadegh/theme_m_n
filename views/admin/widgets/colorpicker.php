<?php
$db=new db();
$query=$db->query("getQuery",
    "data_value",
    "data_name='$name'",
    Database_Admin);
?>
<span class="tpl-colorpicker-widget-holder">
<input class="comma-widget tpl-colorpicker-widget" value="<?= $query->data_value ?>" type="color" name="<?= $name ?>">
    <span>انتخاب رنگ</span>
    </input>

</span>