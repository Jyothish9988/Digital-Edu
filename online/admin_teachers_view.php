<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass(); 
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
// $sem=$_GET['sem'];
// $smartyObj->assign("sem",$sem);
$y=$obj->all_teacher_info();
$z=$obj->new_teacher_info();
$smartyObj->assign("view1",$y);
$smartyObj->assign("view2",$z);
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('admin_teachers_view.tpl');
// $smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>