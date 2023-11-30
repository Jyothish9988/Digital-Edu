<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$sem=$_GET['sem'];
$lkey=$_COOKIE['lkey'];
$smartyObj->assign("sem",$sem);
$z=$obj->std_leave_apply_view($lkey,$sem);
$smartyObj->assign("view1",$z);
$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_leave_apply_view.tpl');
$smartyObj->display('student_footer.tpl');
?>