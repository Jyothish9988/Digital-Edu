<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
$clkey=$_GET['clkey'];
$smartyObj->assign("sem",$sem);
$lkey=$_COOKIE['lkey'];


if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['sub'])AND($_POST['sub'])!=NULL)
{
  if(isset($_POST['topic'])AND($_POST['topic'])!=NULL)
{
  // echo"sub";exit;

if(isset($_POST['url'])AND($_POST['url'])!=NULL)
{
  
      $sub=trim($_POST['sub']);
      $url=trim($_POST['url']);
      $topic=trim($_POST['topic']);
      $obj->tr_std_class_edit($lkey,$sem,$sub,$url,$topic);


  
  }
  else
    echo"<script>alert('Url is empty')</script>";

  }
  else
    echo"<script>alert('Topic is empty')</script>";

  }
  else
    echo"<script>alert('Subject is empty')</script>";
}

$data=$obj->tr_std_class_edit_fetch($sem,$clkey);

$smartyObj->assign("data",$data);

$smartyObj->display('teacher_sub_header.tpl');
$smartyObj->display('url_edit.tpl');
$smartyObj->display('teacher_footer.tpl');
?>