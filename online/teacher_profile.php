<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$tr_key=$_GET['tr_key'];

$s=$obj->teacher_profile($tr_key);
$smartyObj->assign("data",$s);
		

// $smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('teacher_profile.tpl');
// $smartyObj->display('hod_footer.tpl');
?> 