<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$lekey=$_GET['lekey'];
$sem=$_GET['sem'];
$obj->hod_std_leave_apply_reject($lekey,$sem);
?>