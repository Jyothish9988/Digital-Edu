<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];

$smartyObj->display('hod_main_header.tpl');
}
else
{	
	Header("location:login.php");
}
?>