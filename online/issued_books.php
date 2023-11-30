<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$s=$obj->issued_books();
$smartyObj->assign("data",$s);
$smartyObj->display('librarian_header.tpl');
$smartyObj->display('issued_books.tpl');
$smartyObj->display('librarian_footer.tpl');
?>