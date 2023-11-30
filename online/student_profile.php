<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$std_key=$_GET['std_key'];

$s=$obj->student_profile($std_key);
$smartyObj->assign("data",$s);
		

// $smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('student_profile.tpl');
// $smartyObj->display('hod_footer.tpl');
?> 