<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];

$smartyObj->assign("sem",$sem);
// $subject=$_GET['subject'];
$lkey=$_COOKIE['lkey'];

$z=$obj->subject_select_attendance($sem);
$smartyObj->assign("data",$z);

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['date'])AND($_POST['date'])!=NULL)
  {
    $date=trim($_POST['date']);
    $j=$obj->tr_std_attendance_view($date,$sem,$lkey);
        $smartyObj->assign("data",$j);
  }
  else
    echo"<script>alert('Data Does Not Exist !!')</script>";
}


$smartyObj->display('teacher_sub_header.tpl');
$smartyObj->display('tr_attendance_view.tpl');
$smartyObj->display('teacher_footer.tpl');
?>