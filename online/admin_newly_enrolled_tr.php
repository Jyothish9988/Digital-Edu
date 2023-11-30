<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];

$z=$obj->hod_new_enrolled_tr_info();
$smartyObj->assign("data",$z);

$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('admin_newly_enrolled_tr.tpl');

$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>