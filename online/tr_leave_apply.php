<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();


$lkey=$_COOKIE['lkey'];


if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['title'])AND($_POST['title'])!=NULL)
{
	if(isset($_POST['report'])AND($_POST['report'])!=NULL)
	{
		
			$title=trim($_POST['title']);
			$report=trim($_POST['report']);
			$obj->tr_leave_apply($title,$report,$lkey);
		
	}
	else
		echo"<script>alert('Report is empty')</script>";
}
else
echo"<script>alert('Title is empty')</script>";
}


$smartyObj->display('teacher_sub_header2.tpl');
$smartyObj->display('tr_leave_apply.tpl');

$smartyObj->display('teacher_footer.tpl');
?>






