<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$rlid=46;
$smartyObj->assign("rid",$rlid);

$std_key=$_GET['std_key'];
$sem=$_GET['sem'];

$utyp=$obj->fetch_utyp($lkey);
$smartyObj->assign("utyp",$utyp);

$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);

$msgs=$obj->chat_msgs($rlid,$slid);
$smartyObj->assign("msgs",$msgs);

$smartyObj->assign("sem",$sem);

if ($utyp=='4')
{
	$s=$obj->std_tr_chat1($sem);
$smartyObj->assign("view1",$s);
}
else
{
$s=$obj->tr_std_chat1($sem);
$smartyObj->assign("view1",$s);
}

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	
$msg=trim($_POST['msg']);
$obj->tr_hod_msg_send($slid,$msg,$rlid);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}
$smartyObj->display('tr_std_chat_l.tpl');
$smartyObj->display('chat_tr.tpl');
$smartyObj->display('chat_footer.tpl');
?>

