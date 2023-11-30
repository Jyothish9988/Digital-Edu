<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $sem=$_GET['sem'];

// $smartyObj->assign("sem",$sem);
$lkey=$_COOKIE['lkey'];


if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['fees'])AND($_POST['fees'])!=NULL)
{
	if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
	{
		if(isset($_POST['year'])AND($_POST['year'])!=NULL)
	{
			$fees=trim($_POST['fees']);
			$sem=trim($_POST['sem']);
			$year=trim($_POST['year']);
			$obj->feesupload($fees,$sem,$year);

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
$smartyObj->display('fees_upload.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>