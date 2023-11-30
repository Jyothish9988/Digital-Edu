<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$utyp=$obj->fetch_utyp($lkey);
$smartyObj->assign("utyp",$utyp);

$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);

$msgs=$obj->group_msgs($sem);
$smartyObj->assign("msgs",$msgs);

if($utyp=='4')
{
$s=$obj->std_tr_chat1();
$smartyObj->assign("view1",$s);
}
else{
$s=$obj->tr_std_chat1($sem);
$smartyObj->assign("view1",$s);
}


if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	
	$msg=trim($_POST['msg']);
$obj->group_send($msg,$slid,$sem);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}

$smartyObj->display('chat_l_groupchat.tpl');
$smartyObj->display('groupchat.tpl');
$smartyObj->display('chat_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>