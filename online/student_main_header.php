<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$std_key=$obj->lkeytostdkey($lkey);
$obj->unlock_sem($std_key);
$smartyObj->assign("std_key",$std_key);
$s=$obj->fetch_sem($std_key);
$smartyObj->assign("view1",$s);

$smartyObj->display('student_main_header.tpl');
?>