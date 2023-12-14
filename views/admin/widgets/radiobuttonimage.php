<?php $i=0; foreach ($options as $option=>$optionval): $i+=1;?>
        <label>
            <input class="radio-select-widget-admin" type="radio" name="test" value="<?=$optionval?>" checked>
            <img src="<?=THEME_URL."/assets/image/camma-{$optionval}.png"?>" alt="Option <?=$i?>">
        </label>
<?php endforeach;?>