<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
$std_key=$_GET['std_key'];
$obj->hod_std_approve($std_key,$sem);
}
else
{	
	Header("location:login.php");
}
?>