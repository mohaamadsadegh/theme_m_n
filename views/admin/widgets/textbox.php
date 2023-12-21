<?php
$db=new db();
$query=$db->query("getQuery",
    "data_value",
    "data_name='$name'",
    Database_Admin);
?>
<input class="tpl-textbox-widget" type="text" name="<?=$name?>" placeholder="عنوان سایت" value="<?=$query[0][0]?>">
