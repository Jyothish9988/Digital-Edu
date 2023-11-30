<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$s=$obj->timetable_view($sem);
$smartyObj->assign("data",$s);
$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('timetable_view.tpl');
$smartyObj->display('student_footer.tpl');

?>