<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$fekey=$_GET['fekey'];
$v=$obj->fees_upload_edit_view($fekey);
$smartyObj->assign("data",$v);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['fee'])AND($_POST['fee'])!=NULL)
{
	if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
	{
		if(isset($_POST['year'])AND($_POST['year'])!=NULL)
	{
			$fee=trim($_POST['fee']);
			$sem=trim($_POST['sem']);
			$year=trim($_POST['year']);
			$obj->fees_upload_edit_submit($fekey,$fee,$sem,$year);

	}
	else
		echo"<script>alert('year is empty')</script>";
		
	}
	else
		echo"<script>alert('sem is empty')</script>";
}
else
echo"<script>alert('fees is empty')</script>";
}




$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('fees_upload_edit.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>