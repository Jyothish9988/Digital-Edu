<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$gkey=$_GET['key'];

$z=$obj->gallery_delete($gkey);
$smartyObj->assign("data",$z);

?>