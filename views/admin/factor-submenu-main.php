<br>
<div class="factor-admin-pennel">
    <div class="side-bar">
        <div class="logo">
            <img src="" alt="">
        </div>
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
    $(".content-ajax input").click(function (event) {
        setTimeout(function (){
            $('.save-all-setting').show();
        },1000);
        clearTimeout(timer);
        timer = setTimeout(() => {
            console.log($(this).val());
            $('.save-all-setting').hide();
        }, 10000);

    });
</script>
