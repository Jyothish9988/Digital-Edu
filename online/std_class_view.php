<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$s=$obj->std_class_view();
$smartyObj->assign("data",$s);

$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_class_view.tpl');
$smartyObj->display('student_footer.tpl');
?> 