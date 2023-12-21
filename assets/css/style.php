<?php
$db=new db();
$floatnargestest=$db->getQueryAdminSetting("commafloatnargestestmain");
$backgroand_colormain=$db->getQueryAdminSetting("commabackgroand_colormain");
?>
<style>
.test-float{
    background-color: <?=$backgroand_colormain[0][0]?> !important;
    text-align: <?=$floatnargestest[0][0]?> ;
    padding:20px 30px;
    width: 50%;
}
</style>