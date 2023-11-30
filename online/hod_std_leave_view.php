<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$z=$obj->hod_std_leave_apply_view($sem);
$smartyObj->assign("view1",$z);
$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('hod_tr_leave_apply_view.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>