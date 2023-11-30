<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$year=$_GET['year'];
$sem=$_GET['sem'];
$obj->delete_timetable($year,$sem);

?>