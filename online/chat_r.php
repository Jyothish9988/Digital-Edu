<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);
$utyp=$obj->fetch_utyp($lkey);
$smartyObj->assign("utyp",$utyp);


 if ($utyp==1)//hod
    	{

    		
if($_GET['std_key']==null)
{
$tr_key=$_GET['tr_key'];
$rlid=$obj->trkeytolid($tr_key);
$smartyObj->assign("rid",$rlid);//rlid
$smartyObj->assign("trkey",$tr_key);

}
else if($_GET['tr_key']==null)
{
$std_key=$_GET['std_key'];
$rlid=$obj->stdkeytolid($std_key);
$smartyObj->assign("rid",$rlid);//rlid
$smartyObj->assign("std_key",$std_key);

$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$s=$obj->tr_std_chat1($sem);
$smartyObj->assign("view1",$s);
}



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
$smartyObj->display('chat_l.tpl');
$smartyObj->display('chat.tpl');
$smartyObj->display('chat_footer.tpl');



}


    	 elseif($utyp==3)//tr
    	 {
    	$std_key=$_GET['std_key'];


$slid=keytoid("login","lkey",$lkey);
$smartyObj->assign("sid",$slid);
// echo$lkey;exit;

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
$obj->tr_student_msg_send($slid,$msg,$rlid,$std_key);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}
$smartyObj->display('tr_std_chat_l.tpl');
$smartyObj->display('chat_tr.tpl');
$smartyObj->display('chat_footer.tpl');

    }
     elseif($utyp==4)//std
     {
     	
    	$tr_key=$_GET['tr_key'];



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
$obj->msg_send($slid,$msg,$rlid,$skey);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}




$smartyObj->display('std_tr_chat_l.tpl');
$smartyObj->display('chat_std.tpl');
$smartyObj->display('chat_footer.tpl');
    }

}

else
{	
	Header("location:login.php");
}

?>