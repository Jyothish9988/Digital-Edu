<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$nokey=$_GET['nokey'];
$obj->delete_notice($nokey);

?>