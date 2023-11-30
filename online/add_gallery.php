<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj =new userclass();
$lkey=$_COOKIE['lkey'];
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['heading'])AND($_POST['heading'])!=NULL)
	{
		if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
	{
		$heading=trim($_POST['heading']);
		$subject=trim($_POST['subject']);

		$obj->add_gallery($heading,$subject,$_FILES['photo']);
	}
}
}

$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('add_gallery.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>