<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
$fekey=$_GET['fekey'];
$obj->fees_delete($fekey);

?>