<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$std_key=$_GET['std_key'];
$slid=$obj->stdkeytolid($std_key);
$sem=$_GET['sem'];
$subject=$_GET['subject'];
$s=$obj->absent($sem,$subject,$lkey,$slid);
}
else
{	
	Header("location:login.php");
}
?>