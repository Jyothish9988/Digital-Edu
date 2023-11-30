<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
// $sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$std_key=$_GET['std_key'];
$lkey=$_COOKIE['lkey'];

// $obj-> hod_std_suspend_expire();

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
// if(isset($_POST['reason'])AND($_POST['reason'])!=NULL)
// {
	if(isset($_POST['sspddate'])AND($_POST['sspddate'])!=NULL)
	{
		
			// $reason=trim($_POST['reason']);
			$sspddate=trim($_POST['sspddate']);
			$obj->hod_std_suspend($sspddate,$std_key,$sem);
		
	}
	else
		echo"<script>alert('Date is empty')</script>";
// }
// else
// echo"<script>alert('Reason is empty')</script>";
}

// $obj->hod_std_reject($std_key,$sem);

$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('hod_std_suspend.tpl');
$smartyObj->display('hod_footer.tpl');
?>