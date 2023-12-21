<input class="button-primary" type="button" id="button-uploader-widget" value="انتخاب فایل"><br>
<input id="url-file-uploader-widget" placeholder="آدرس فایل" type="text">
<input class="tpl-uploadmedia-widget" name="<?= $name ?>" type="file"><br>


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
                var url = "C:/xampp/htdocs/cama-group.com/wp-content/themes/theme_m_n/assets/image/" + response;
                $("#url-file-uploader-widget").val(url);
            }
        });
    });
</script>