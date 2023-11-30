<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$akey=$_GET['akey'];
$v=$obj->addon_edit_view($akey);
$smartyObj->assign("data",$v);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['title'])AND($_POST['title'])!=NULL)
	{
		if(isset($_POST['details'])AND($_POST['details'])!=NULL)
	{
		$title=trim($_POST['title']);
		$details=trim($_POST['details']);

		$obj->edit_addon($title,$details,$_FILES['photo'],$akey);
	}
}
}

$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('addon_edit.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>