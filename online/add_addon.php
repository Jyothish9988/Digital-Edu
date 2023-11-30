<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['title'])AND($_POST['title'])!=NULL)
	{
		if(isset($_POST['details'])AND($_POST['details'])!=NULL)
	{
		$title=trim($_POST['title']);
		$details=trim($_POST['details']);

		$obj->add_addon($title,$details,$_FILES['photo'],$sem);
	}
}
}

$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('add_addon.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>