<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];
$ntkey=$_GET['ntkey'];
$smartyObj->assign("sem",$sem);
$r=1;
$smartyObj->assign("r",$r);
$lkey=$_COOKIE['lkey'];

    $j=$obj->tr_std_handin_view($ntkey);
        $smartyObj->assign("data",$j);

$smartyObj->display('teacher_sub_header2.tpl');
$smartyObj->display('tr_std_handin_view.tpl');
$smartyObj->display('teacher_footer.tpl');
?>