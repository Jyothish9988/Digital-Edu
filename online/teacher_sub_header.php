<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
// $tr_key=$_GET['tr_key'];
// $smartyObj->assign("tr_key",$tr_key);
$smartyObj->display('teacher_sub_header.tpl');
?>