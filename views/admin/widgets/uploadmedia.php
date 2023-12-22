<?php
$db=new db();
$query=$db->getQueryAdminSetting($name);
?>
<input class="button-primary" type="button" id="button-uploader-widget" value="انتخاب فایل"><br>
<input value="<?=$query->data_value?>" id="url-file-uploader-widget" placeholder="آدرس فایل" type="text">
<input value="<?=$query->data_value?>" class="comma-widget tpl-uploadmedia-widget" name="<?= $name ?>" type="file"><br>


<script>
    $('#button-uploader-widget').click(function () {
        $('.tpl-uploadmedia-widget').click();
    });
    $(".tpl-uploadmedia-widget").change(function () {
        console.log($(this)[0].files[0]);
        var formData = new FormData();
        formData.append("file", $(this)[0].files[0]);
        formData.append("action", "sendwidgetdata");
        $.ajax({
            url: '<?= admin_url('admin-ajax.php')?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $("#url-file-uploader-widget").val(response);
            }
        });
    });
</script>