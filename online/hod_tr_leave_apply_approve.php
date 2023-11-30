<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$lekey=$_GET['lekey'];
$obj->hod_tr_leave_apply_approve($lekey);
?>