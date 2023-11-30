<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$s=$obj->question_bank();
$smartyObj->assign("data",$s);
$smartyObj->display('library_sub_header.tpl');
$smartyObj->display('question_bank.tpl');
$smartyObj->display('library_footer.tpl');
?>