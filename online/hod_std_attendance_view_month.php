<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$obj->fullday($sem);

$lkey=$_COOKIE['lkey'];

$std=$obj->atdce_std_view($sem);
$smartyObj->assign("std",$std);
//roll number
$smartyObj->assign("r",1);

$day1=array();


if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['date'])AND($_POST['date'])!=NULL)
  {
    $date=trim($_POST['date']);

    $j=$obj->tr_std_attendance_students_view_month($date,$sem,$lkey);

        $smartyObj->assign("atdce",$j);

         $k=$obj->tr_std_attendance_select_month($date,$sem,$lkey);
       
$smartyObj->assign("days",$k);
$l=$obj->tr_std_attendance_students_view_month_percent($date,$sem,$lkey);
$smartyObj->assign("percent",$l);
         

}


  }
  else
    echo"<script>alert('Data Does Not Exist !!')</script>";


$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('tr_std_attendance_view_month.tpl');
$smartyObj->display('hod_footer.tpl');
?>