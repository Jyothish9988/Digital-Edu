<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$sem=$_GET['sem'];
$lkey=$_COOKIE['lkey'];
$smartyObj->assign("sem",$sem);
$z=$obj->std_video_classes($lkey,$sem);
$smartyObj->assign("view1",$z);
$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_video_classes.tpl');
$smartyObj->display('student_footer.tpl');
?>