<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$cokey=$_GET['cokey'];

$obj->contact_delete_tr($cokey);

?>