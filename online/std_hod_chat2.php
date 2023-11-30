<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";


if(!empty($_GET['sem']))
{
	$sem=$_GET['sem'];
	$smartyObj->assign("sem",$sem);
}

$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$rlid=46;
$smartyObj->assign("rid",$rlid);

$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);


$msgs=$obj->chat_msgs($rlid,$slid);
$smartyObj->assign("msgs",$msgs);

$s=$obj->std_tr_chat1();
$smartyObj->assign("view1",$s);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	
$msg=trim($_POST['msg']);
$obj->tr_student_msg_send($slid,$msg,$rlid);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}
$smartyObj->display('std_tr_chat_l.tpl');
$smartyObj->display('chat_std.tpl');
$smartyObj->display('chat_footer.tpl');
?>