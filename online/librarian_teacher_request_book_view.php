<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$s=$obj->librarian_teacher_request_book_view();
$smartyObj->assign("data",$s);
$smartyObj->display('librarian_header.tpl');
$smartyObj->display('librarian_teacher_request_book_view.tpl');
$smartyObj->display('librarian_footer.tpl');

?>