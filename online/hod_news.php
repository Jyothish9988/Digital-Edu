<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];


if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['title'])AND($_POST['title'])!=NULL)
{
	if(isset($_POST['report'])AND($_POST['report'])!=NULL)
	{
		
			$title=trim($_POST['title']);
			$report=trim($_POST['report']);
			$obj->hod_news($title,$report);
		
	}
	// else
		// echo"<script>alert('Report is empty')</script>";
}
// else
// echo"<script>alert('Title is empty')</script>";
}


$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('hod_news.tpl');

$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>






