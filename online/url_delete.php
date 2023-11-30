<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$sem=$_GET['sem'];
$clkey=$_GET['clkey'];
$obj->url_delete($clkey,$sem);

?>