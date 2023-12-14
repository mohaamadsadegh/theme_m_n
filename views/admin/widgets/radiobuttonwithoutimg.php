<div class="comma-radio-button-without-img">
    <?php foreach ($options as $option=>$optionval):?>
    <label>
        <input type="radio" class="comma-radio-button-without-img-input" value="<?=$optionval?>" checked/>
        <span><?=$optionval?></span>
    </label>
    <?php endforeach;?>
</div>
