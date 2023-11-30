<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

$sem=$_GET['sem'];
$std_key=$_GET['std_key'];
$obj->hod_std_delete($std_key,$sem);

?>