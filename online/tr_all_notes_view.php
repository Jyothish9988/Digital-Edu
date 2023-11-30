<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
// $subject=$_GET['subject'];
$s=$obj->tr_all_notes_fetch();
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['sname'])AND($_POST['sname'])!=NULL)
  {
  	if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
  {
  	if(isset($_POST['topic'])AND($_POST['topic'])!=NULL)
  {
    $sname=trim($_POST['sname']);
    $sem=trim($_POST['sem']);
    $topic=trim($_POST['topic']);
    $j=$obj->notes_search($sname,$sem,$topic);
        $smartyObj->assign("data",$j);
  }
  
}
}
else
    echo"<script>alert('Product Does Not Exist')</script>";
}


$smartyObj->display('teacher_sub_header2.tpl');
$smartyObj->display('tr_all_notes_view.tpl');
$smartyObj->display('teacher_footer.tpl');
?>