<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$s=$obj->hod_news_view();
$smartyObj->assign("data",$s);
$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('hod_news_view.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>