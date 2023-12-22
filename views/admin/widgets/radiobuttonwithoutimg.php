<?php
$db=new db();
$query=$db->getQueryAdminSetting($name);
?>
<div class="comma-radio-button-without-img">
    <?php foreach ($options as $option=>$optionval):?>
    <label class="comma-radio-button-without-img-label-<?php echo $name; if ($optionval==$query->data_value) echo " btn-checked";?>">
        <input type="radio" class="comma-widget comma-radio-button-without-img-input" name="<?=$name?>" value="<?=$optionval?>" checked/>
        <span><?=$optionval?></span>
    </label>
    <?php endforeach;?>
</div>
<script>
    $(".comma-radio-button-without-img-label-<?php echo $name?>").click(function (){
       $(".btn-checked").removeClass("btn-checked");
       $("<?php echo ".checked-".$name?>").removeClass("<?php echo "checked-".$name?>");

       $(this).addClass("btn-checked");
    });
</script>