<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
$key=$_GET['key'];
$obj->admin_news_delete($key);

?>