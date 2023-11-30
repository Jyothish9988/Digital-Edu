<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
// $y=$obj->hod_teachers_view();
// $smartyObj->assign("view1",$y);
$y=$obj->hod_all_teacher_info();
$z=$obj->hod_new_teacher_info();
$smartyObj->assign("view1",$y);
$smartyObj->assign("view2",$z);
$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('hod_teachers_view.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>