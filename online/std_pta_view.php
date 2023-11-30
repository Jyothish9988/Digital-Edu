<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
$lkey=$_COOKIE['lkey'];
$smartyObj->assign("sem",$sem);

$z=$obj->std_pta_view($sem,$lkey);
$smartyObj->assign("pta",$z);
$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_pta_view.tpl');
$smartyObj->display('student_footer.tpl');
?>






