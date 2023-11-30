<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$gkey=$_GET['key'];

$z=$obj->gallery_edit_fetch($gkey);
$smartyObj->assign("data",$z);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['heading'])AND($_POST['heading'])!=NULL)
	{
		if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
	{
		$heading=trim($_POST['heading']);
		$subject=trim($_POST['subject']);

		$obj->gallery_edit($heading,$subject,$_FILES['photo'],$gkey);
	}
}
}

$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('gallery_edit.tpl');
$smartyObj->display('admin_footer.tpl');
?>