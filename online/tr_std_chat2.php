<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$std_key=$_GET['std_key'];
$smartyObj->assign("std_key",$std_key);

$det=$obj->rec_std($std_key);
$smartyObj->assign("det",$det);

$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);


$rlid=$obj->stdkeytolid($std_key);
$smartyObj->assign("rid",$rlid);



$s=$obj->std_tr_chat1();
$smartyObj->assign("view1",$s);


$msgs=$obj->chat_msgs($rlid,$slid);
$smartyObj->assign("msgs",$msgs);

$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$s=$obj->tr_std_chat1($sem);
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
$smartyObj->display('tr_std_chat_l.tpl');
$smartyObj->display('chat_tr.tpl');
$smartyObj->display('chat_footer.tpl');
?>