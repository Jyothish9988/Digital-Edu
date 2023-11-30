<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$ptakey=$_GET['ptakey'];



$obj->hod_pta_delete($ptakey,$sem);

?>



