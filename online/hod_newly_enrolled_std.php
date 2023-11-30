<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];

$z=$obj->hod_new_enrolled_std_info();
$smartyObj->assign("data",$z);

$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('hod_newly_enrolled_std.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>