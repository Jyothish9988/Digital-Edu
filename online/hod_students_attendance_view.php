<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
// $subject=$_GET['subject'];
$smartyObj->assign("sem",$sem);

$lkey=$_COOKIE['lkey'];


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



$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('tr_std_attendance_view2.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{ 
  Header("location:login.php");
}
?>