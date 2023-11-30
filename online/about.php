<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$y=$obj->hod_all_teacher_info();
$smartyObj->assign("view1",$y);
$smartyObj->display('about.tpl');
// $smartyObj->display('student_footer.tpl');
?>