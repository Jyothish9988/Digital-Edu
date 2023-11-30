<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$s=$obj->subject_select($sem);
$smartyObj->assign("sub",$s);




if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
{
	// echo"hi";exit;
	
	$subject=trim($_POST['subject']);
	$obj->attendance_subject_select($subject,$sem);
}

	echo"<script>alert('Message Is Empty')</script>";
}





$smartyObj->display('teacher_sub_header.tpl');
$smartyObj->display('attendance_subject_select.tpl');
$smartyObj->display('teacher_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>