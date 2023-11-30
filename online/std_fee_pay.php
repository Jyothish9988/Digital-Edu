<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
$stdkey=$obj->lkeytostdkey($lkey);
// $s=$obj->fetch_sem_fee($stdkey);
// $smartyObj->assign("view1",$s);
$z=$obj->feeunlockbutton($stdkey);
$smartyObj->assign("view2",$z);
$smartyObj->display('student_sub_header.tpl');
$smartyObj->display('std_fee_pay.tpl');
$smartyObj->display('student_footer.tpl');

?>