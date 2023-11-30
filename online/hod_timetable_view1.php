<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
// if(isset($_POST['hide'])AND($_POST['hide'])=='h')
// {
// 	if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
// {
// 	if(isset($_POST['year'])AND($_POST['year'])!=NULL)
// {
// 			$sem=trim($_POST['sem']);
// 			$year=trim($_POST['year']);
$s=$obj->hod_timetable_view1();
$smartyObj->assign("data",$s);
// }
// }
// }
// $smartyObj->assign("data",$s);
$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('hod_timetable_view1.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>