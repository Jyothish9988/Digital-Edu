<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$nkey=$_GET['key'];
$v=$obj->hod_news_edit_view($nkey);
$smartyObj->assign("data",$v);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['title'])AND($_POST['title'])!=NULL)
	{
		if(isset($_POST['report'])AND($_POST['report'])!=NULL)
		{
		
			
					$title=trim($_POST['title']);
					$report=trim($_POST['report']);
			 		$obj->hod_news_edit($title,$report,$nkey); 	
		}
		else
			echo"<script>alert('Report is invalid')</script>";
	}
	else
		echo"<script>alert('Title is invalid')</script>";
}
$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('hod_news_edit.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>