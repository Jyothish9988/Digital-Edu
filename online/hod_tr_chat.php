<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $lkey=$_COOKIE['lkey'];
// $sem=$_GET['sem'];
// $trkey=$obj->lkeytotrkey($lkey);
$s=$obj->hod_tr_chat1();
$smartyObj->assign("view1",$s);
$smartyObj->display('hod_tr_chat_l.tpl');
$smartyObj->display('hod_tr_chat_r.tpl');
}
else
{	
	Header("location:login.php");
}
?>