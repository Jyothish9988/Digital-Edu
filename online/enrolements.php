<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$akey=$_GET['akey'];
$course=$_GET['course'];
$y=$obj->hod_addon_enroll_view($sem,$akey,$course);
$smartyObj->assign("view1",$y);


$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('enrolements.tpl');
$smartyObj->display('hod_footer.tpl');

?>



