<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$key=$_GET['key'];
$sem=$_GET['sem'];
$obj->addon_delete($key,$sem);
?>