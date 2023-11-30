<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$sem=$_GET['sem'];
$std_key=$_GET['std_key'];
$obj->std_reject($std_key,$sem);
?>