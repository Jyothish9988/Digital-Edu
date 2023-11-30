<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$s=$obj->upload_notice_view();
$smartyObj->assign("data",$s);
$smartyObj->display('librarian_header.tpl');
$smartyObj->display('upload_notice_view.tpl');
$smartyObj->display('librarian_footer.tpl');

?>