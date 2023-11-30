<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$s=$obj->issued_question_paper();
$smartyObj->assign("data",$s);
$smartyObj->display('librarian_header.tpl');
$smartyObj->display('issued_question_paper.tpl');
$smartyObj->display('librarian_footer.tpl');
?>