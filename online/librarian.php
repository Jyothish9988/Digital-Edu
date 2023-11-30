<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$student=$obj->count_student();
$smartyObj->assign("student",$student);


$teacher=$obj->count_teacher();
$smartyObj->assign("teacher",$teacher);

$book=$obj->count_book();
$smartyObj->assign("book",$book);

$req=$obj->count_req();
$smartyObj->assign("req",$req);


$smartyObj->display('librarian_header.tpl');
$smartyObj->display('librarian.tpl');
$smartyObj->display('librarian_footer.tpl');
?>