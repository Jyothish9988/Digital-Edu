<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$tr_key=$_GET['tr_key'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$smartyObj->assign("tr_key",$tr_key);
$det=$obj->rec_tr($tr_key);
$smartyObj->assign("det",$det);


$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);


$rlid=$obj->trkeytolid($tr_key);
$smartyObj->assign("rid",$rlid);


$s=$obj->std_tr_chat1();
$smartyObj->assign("view1",$s);




$msgs=$obj->chat_msgs($rlid,$slid);
$smartyObj->assign("msgs",$msgs);



if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	
	$msg=trim($_POST['msg']);
$obj->msg_send($slid,$msg,$rlid);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}




$smartyObj->display('std_tr_chat_l.tpl');
$smartyObj->display('chat_std.tpl');
$smartyObj->display('chat_footer.tpl');
?>