<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();



$smartyObj->display('student_sub_header.tpl');
$smartyObj->display('notice.tpl');
$smartyObj->display('student_footer.tpl');
?>