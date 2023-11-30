<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $tr_key=$_GET['tr_key'];
// $smartyObj->assign("tr_key",$tr_key);
$key=$_COOKIE['lkey'];
$y=$obj->all_student_info1();
$smartyObj->assign("view1",$y);
$smartyObj->display('librarian_header.tpl');
$smartyObj->display('all_student_info.tpl');
$smartyObj->display('librarian_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>