<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<div class="factor-admin-pennel">
    <div class="side-bar">
        <a href="<?= home_url(); ?>" class="logo">
            <img src="<?php Asset::image('Logo.svg')?>" alt="">
        </a>
        <ul class="factor-admin-pennel-ul">
            <!--            li menus in array for show in html-->
            <?php
            $Calldynamicmenu = new Calldynamicmenu();
            $menus = [
                'MNpublic',
                'MNpagetitle',
                'MNfooter',
                'MNtypography',
                'MNstyleandcolors',
                'MNblog',
                'MNshop',
                'MNportfolio',
                'MNshoparchive',
                'MNsingleproduct',
                'MNmyaccount',
                'MNsosialmedia',
                'MNmaintanisemode',
                'MNcustomcss',
                'MNcustomjs',
                'MNimportexport'
            ];
            foreach ($menus as $menu) {
                $Calldynamicmenu->addMenu($menu);
            }
            ?>
        </ul>

    </div>
    <div class="content">
        <div>
            <h1>به تنظیمات قالب ما خوش آمدید</h1>
            <img src="" alt="">
        </div>
        <div class="content-ajax">
            <!--            default menu used-->
            <?php
            $a = new MNpublic();
            $a->addContentMenu();
            ?>
        </div>
    </div>
</div>
<div class="save-all-setting">
    <p>در حال ذخیره سازی...</p>
</div>

</body>
<script>
    // Ajax chenge menu
    $('.factor-admin-pennel-li').click(function (){
        let manu_name = $(this).attr('data-menu-name');
        $.ajax({
            url: '<?= admin_url('admin-ajax.php')?>',
            method: 'post',
            type: 'html',
            data: {
                action: 'sendAjaxMenuName',
                menu_name:manu_name,
            },
            success:function (response){
                $('.content-ajax').html(response);
            }
        });
    });
    //Save data changed
    var timer;
    $(".content-ajax .comma-widget").change(function (event) {
        $('.save-all-setting').show();
        clearTimeout(timer);
        timer = setTimeout(() => {
            $.ajax({
                url: '<?= admin_url('admin-ajax.php')?>',
                method: 'post',
                type: 'html',
                data: {
                    action: "adminchangeddata",
                    changed_val: $(this).val(),
                    changed_name: $(this).attr('name')
                }
            });
            $('.save-all-setting').hide();
        }, 300);
    });
</script>
</html>
