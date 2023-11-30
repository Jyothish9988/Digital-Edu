<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();


$z=$obj->gallery_view();
$smartyObj->assign("data",$z);

$y=$obj->gallery_notice_view();
$smartyObj->assign("data1",$y);

$smartyObj->display('index_header.tpl');
$smartyObj->display('gallery.tpl');
$smartyObj->display('index_footer.tpl');
?>