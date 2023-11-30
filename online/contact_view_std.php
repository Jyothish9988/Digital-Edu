<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$s=$obj->contact_view_std();
$smartyObj->assign("data",$s);
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('contact_view_std.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>