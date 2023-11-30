<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$subject=$_GET['subject'];
$s=$obj->book_fetch($subject);
$smartyObj->assign("data",$s);


$smartyObj->display('library_sub_header.tpl');
$smartyObj->display('book_fetch.tpl');
$smartyObj->display('library_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>