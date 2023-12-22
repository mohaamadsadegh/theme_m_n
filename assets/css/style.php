<?php
$db=new db();
$floatnargestest=$db->getQueryAdminSetting("commafloatnargestestmain");
$backgroand_colormain=$db->getQueryAdminSetting("commabackgroand_colormain");
$commatextalignnargestestmain=$db->getQueryAdminSetting("commatextalignnargestestmain");
?>
<style>
.test-float{
    background-color: <?=$backgroand_colormain->data_value?> !important;
    text-align: <?=$commatextalignnargestestmain->data_value?> ;
    float: <?=$floatnargestest->data_value?> ;
    padding:20px 30px;
    width: 50%;
}
</style>