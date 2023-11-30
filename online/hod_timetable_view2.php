<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$year=$_GET['year'];
$sem=$_GET['sem'];
$s=$obj->hod_timetable_view2($year,$sem);
$smartyObj->assign("data",$s);
$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('hod_timetable_view2.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>