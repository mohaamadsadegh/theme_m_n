<?php
$db=new db();
$query=$db->query("getQuery",
    "data_value",
    "data_name='$name'",
    Database_Admin);
?>
<span class="tpl-colorpicker-widget-holder">
<input class="tpl-colorpicker-widget" value="<?= $query[0][0] ?>" type="color" name="<?= $name ?>">
    <span>انتخاب رنگ</span>
    </input>

</span>