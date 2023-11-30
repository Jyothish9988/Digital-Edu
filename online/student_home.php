<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
// echo$sem;exit;

$z=$obj->std_addon_view($sem,$lkey);
$smartyObj->assign("data",$z);

$smartyObj->assign("sem",$sem);
$smartyObj->display('student_home.tpl');

?>