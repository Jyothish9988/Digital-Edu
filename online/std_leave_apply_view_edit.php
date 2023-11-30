<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$sem=$_GET['sem'];
$lkey=$_COOKIE['lkey'];
$lekey=$_GET['lekey'];
$smartyObj->assign("sem",$sem);
$s=$obj->std_leave_apply_edit_view($lekey);
$smartyObj->assign("view1",$s);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['title'])AND($_POST['title'])!=NULL)
{
	if(isset($_POST['report'])AND($_POST['report'])!=NULL)
	{
		
			$title=trim($_POST['title']);
			$report=trim($_POST['report']);
			$obj->std_leave_apply_view_edit_submit($title,$report,$lekey,$sem);
		
	}
	else
		echo"<script>alert('Report is empty')</script>";
}
else
echo"<script>alert('Title is empty')</script>";
}


$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_leave_apply_view_edit.tpl');

$smartyObj->display('student_footer.tpl');
?>


