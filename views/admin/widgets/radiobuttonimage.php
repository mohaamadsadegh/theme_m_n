<?php
$db=new db();
$query=$db->getQueryAdminSetting($name);
$i=0; foreach ($options as $option=>$optionval): $i+=1;?>
        <label>
            <input class="comma-widget radio-select-widget-admin" type="radio" name="<?=$name?>" value="<?=$optionval?>" <?php if ($optionval==$query->data_value) echo "checked";?>>
            <img src="<?=THEME_URL."/assets/image/camma-{$optionval}.png"?>" alt="Option <?=$i?>">
        </label>
<?php endforeach;?>