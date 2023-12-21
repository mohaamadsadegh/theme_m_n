<?php
$db=new db();
$query=$db->query("getQuery",
    "data_value",
    "data_name='$name'",
    Database_Admin
);

$i=0; foreach ($options as $option=>$optionval): $i+=1;?>
        <label>
            <input class="radio-select-widget-admin" type="radio" name="commafloatnargestestmain" value="<?=$optionval?>" <?php if ($optionval==$query[0][0]) echo "checked";?>>
            <img src="<?=THEME_URL."/assets/image/camma-{$optionval}.png"?>" alt="Option <?=$i?>">
        </label>
<?php endforeach;?>