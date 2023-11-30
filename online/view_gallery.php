<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();


$z=$obj->gallery_view();
$smartyObj->assign("data",$z);



$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('view_gallery.tpl');
$smartyObj->display('admin_footer.tpl');
?>