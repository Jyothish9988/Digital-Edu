<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$tr_key=$_GET['tr_key'];
$obj->hod_delete_tr($tr_key);

?>