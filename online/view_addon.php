<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];

$z=$obj->view_addon($sem);
$smartyObj->assign("data",$z);
$smartyObj->assign("sem",$sem);


$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('view_addon.tpl');
$smartyObj->display('hod_footer.tpl');
?>