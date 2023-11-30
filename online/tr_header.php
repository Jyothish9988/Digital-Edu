<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$smartyObj->display('teacher_sub_header.tpl');

$smartyObj->display('tr_header.tpl');

$smartyObj->display('teacher_footer.tpl');

?>