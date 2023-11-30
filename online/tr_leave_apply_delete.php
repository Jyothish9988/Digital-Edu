<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$lekey=$_GET['lekey'];
$obj->tr_leave_apply_delete($lekey);


?>