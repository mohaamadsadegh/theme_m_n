<?php
$db=new db();
$site_title=$db->getQueryAdminSetting("commatitlesitemain");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>خوش آمدید</title>
</head>
<body>
<div class="test-float">
    <?=$site_title[0][0]?>
</div>

</body>
</html>