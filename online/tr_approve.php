<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$sem=$_GET['sem'];
$tr_key=$_GET['tr_key'];
$obj->tr_approve($tr_key,$sem);
?>