<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$tr_key=$obj->lkeytotrkey($lkey);
$smartyObj->assign("tr_key",$tr_key);
$smartyObj->display('teacher_main_header.tpl');
?>