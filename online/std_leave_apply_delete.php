<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

$sem=$_GET['sem'];
$lekey=$_GET['lekey'];
$obj->std_leave_apply_delete($lekey,$sem);


?>