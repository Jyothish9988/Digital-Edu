<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
// echo$sem;exit;
$smartyObj->assign("sem",$sem);
// $smartyObj->display('teacher_sub_header.tpl');

$smartyObj->display('hod_header.tpl');

// $smartyObj->display('teacher_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>