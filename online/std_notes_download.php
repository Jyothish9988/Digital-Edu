<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();


$lkey=$_COOKIE['lkey'];
$ntkey=$_GET['ntkey'];
$note=$_GET['note'];
// $sem=$_GET['sem'];
$obj->std_notes_download($ntkey,$lkey,$note);



?> 