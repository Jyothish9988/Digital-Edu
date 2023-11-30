<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$qkey=$_GET['qkey'];
$obj->delete_questionpaper($qkey);



}
else
{	
	Header("location:login.php");
}
?>