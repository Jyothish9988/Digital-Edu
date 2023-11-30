<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
// $subject=$_GET['subject'];
$smartyObj->assign("sem",$sem);
$r=1;
$smartyObj->assign("r",$r);
$lkey=$_COOKIE['lkey'];


if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['date'])AND($_POST['date'])!=NULL)
  {
    $date=trim($_POST['date']);
    $j=$obj->std_attendance_daily_view($date,$sem,$lkey);
        $smartyObj->assign("data",$j);
  }
  else
    echo"<script>alert('Data Does Not Exist !!')</script>";
}


$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_attendance_daily_view.tpl');
$smartyObj->display('student_footer.tpl');
?>