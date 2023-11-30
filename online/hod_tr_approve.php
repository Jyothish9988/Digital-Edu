<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$tr_key=$_GET['tr_key'];
$obj->hod_tr_approve($tr_key);
?>