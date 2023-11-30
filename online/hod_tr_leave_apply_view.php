<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $lekey=$_GET['lekey'];
$z=$obj->hod_tr_leave_apply_view();
$smartyObj->assign("view1",$z);
$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('hod_tr_leave_apply_view.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>