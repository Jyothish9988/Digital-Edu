<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
$z=$obj->tr_leave_apply_view($lkey);
$smartyObj->assign("view1",$z);
$smartyObj->display('teacher_sub_header2.tpl');
$smartyObj->display('tr_leave_apply_view.tpl');
$smartyObj->display('teacher_footer.tpl');
?>