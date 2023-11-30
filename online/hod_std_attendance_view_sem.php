<?php

include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];

$smartyObj->assign("sem",$sem);
$lkey=$_COOKIE['lkey'];

//roll number
$smartyObj->assign("r",1);


    $j=$obj->tr_std_attendance_students_view_sem($sem,$lkey);

        $smartyObj->assign("data",$j);

$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('tr_std_attendance_view_sem.tpl');
$smartyObj->display('hod_footer.tpl');
?>