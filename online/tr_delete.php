<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
// $sem=$_GET['sem'];
$tr_key=$_GET['tr_key'];
$obj->delete_tr($tr_key);

?>