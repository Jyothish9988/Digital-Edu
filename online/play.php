<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$value=$_GET['value'];
$smartyObj->assign("value",$value);

// echo $value; exit;
// $s=$obj->std_class_view();
// $smartyObj->assign("data",$s);

$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('play.tpl');
$smartyObj->display('student_footer.tpl');
?> 