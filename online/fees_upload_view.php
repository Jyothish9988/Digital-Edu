<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $sem=$_GET['sem'];

// $smartyObj->assign("sem",$sem);
$lkey=$_COOKIE['lkey'];
$s=$obj->fees_upload_view();
$smartyObj->assign("data",$s);
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('fees_upload_view.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>