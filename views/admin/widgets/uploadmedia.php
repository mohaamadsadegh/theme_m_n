<input class="button-primary" type="button" id="button-uploader-widget" value="انتخاب فایل"><br>
<input class="tpl-uploadmedia-widget" name="<?=$name?>" type="file"><br>
<input id="url-file-uploader-widget" placeholder="آدرس فایل" type="text">



<script>
    $('#button-uploader-widget').click(function(){
        $('.tpl-uploadmedia-widget').click();
    });
</script>