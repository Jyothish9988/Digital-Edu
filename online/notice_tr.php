<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$s=$obj->notice_view();
$smartyObj->assign("data",$s);
$smartyObj->display('teacher_sub_header2.tpl');
$smartyObj->display('notice.tpl');
$smartyObj->display('teacher_footer.tpl');
?>