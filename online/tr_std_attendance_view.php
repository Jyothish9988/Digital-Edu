<?php

include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];

$smartyObj->assign("sem",$sem);

$obj->fullday($sem);

$lkey=$_COOKIE['lkey'];

//roll number
$smartyObj->assign("r",1);

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['date'])AND($_POST['date'])!=NULL)
  {
    $date=trim($_POST['date']);
    $k=$obj->tr_std_attendance_day_view($date,$sem,$lkey);
    $j=$obj->tr_std_attendance_students_view($date,$sem,$lkey);
    $cs=$obj->tr_std_attendance_subject_view($date,$sem,$lkey);
        $smartyObj->assign("cs",$cs);
        $smartyObj->assign("data",$j);
        $smartyObj->assign("day",$k);
  }
  else
    echo"<script>alert('Data Does Not Exist !!')</script>";
}


$smartyObj->display('teacher_sub_header.tpl');
$smartyObj->display('tr_std_attendance_view2.tpl');
$smartyObj->display('teacher_footer.tpl');
?>