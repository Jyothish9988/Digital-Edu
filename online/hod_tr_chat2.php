<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$tr_key=$_GET['tr_key'];


$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);

$det=$obj->rec_tr($tr_key);
$smartyObj->assign("det",$det);

$rlid=$obj->trkeytolid($tr_key);
$smartyObj->assign("tr_key",$tr_key);
$smartyObj->assign("rid",$rlid);


$msgs=$obj->chat_msgs($rlid,$slid);
$smartyObj->assign("msgs",$msgs);

$s=$obj->hod_tr_chat1();
$smartyObj->assign("view1",$s);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	
	$msg=trim($_POST['msg']);
$obj->hod_teacher_msg_send($rlid,$msg,$slid);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}
$smartyObj->display('hod_tr_chat_l.tpl');
$smartyObj->display('chat_hod.tpl');
$smartyObj->display('chat_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>