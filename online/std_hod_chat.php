<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$trkey=$obj->lkeytotrkey($lkey);
$s=$obj->hod_std_chat1($sem);
$smartyObj->assign("sem",$sem);
$smartyObj->assign("view1",$s);
$smartyObj->display('std_tr_chat_l.tpl');
$smartyObj->display('std_tr_chat_r.tpl');
?>