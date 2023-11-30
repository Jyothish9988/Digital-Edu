<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];

// $j=$obj->count_student();
// $smartyObj->assign("std",$j);


$smartyObj->display('admin.tpl');
}
else
{	
	Header("location:login.php");
}
?>