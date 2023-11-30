<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$aid=$_GET['key'];
$sem=$_GET['sem'];
$lkey=$_COOKIE['lkey'];
$smartyObj->assign("sem",$sem);

$key=$_GET['key'];
$obj->addon_enroll($key,$lkey,$sem,$aid);
}
else
{	
	Header("location:login.php");
}
?>