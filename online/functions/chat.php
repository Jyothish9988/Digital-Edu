<?php 
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new mainclass();
$key=$_COOKIE['lkey'];
if($_GET!=null)
{
$key1=$_GET['key'];



$a=$obj->viewps($key1);
$b=$obj->recmsg($key,$key1);
$smartyObj->assign("data1",$a);
$smartyObj->assign("data2",$b);
}
$id=keytoid("login","lkey",$key);
$smartyObj->assign("senderid",$id);
$s=$obj->psviewmsg($key);
$smartyObj->assign("data",$s);



if(isset($_POST['hide']) and $_POST['hide']=="h")
{
    if(isset($_POST['msg']) and $_POST['msg']!=null)
    {
        $msg=trim($_POST['msg']);
        $obj->sndmsgps($msg,$key,$key1);
    }
    else
    echo "<script>alert('Enter message to send')</script>";
}
$smartyObj->display('chats.tpl');