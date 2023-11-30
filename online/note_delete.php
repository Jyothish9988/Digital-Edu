<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$ntkey=$_GET['ntkey'];
$obj->delete_note($ntkey);


?>