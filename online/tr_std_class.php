<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$sem=$_GET['sem'];

$smartyObj->assign("sem",$sem);
$lkey=$_COOKIE['lkey'];


$s=$obj->subject_select($sem);
$smartyObj->assign("sub",$s);



if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['hash'])AND($_POST['hash'])!=NULL)
	{
if(isset($_POST['sub'])AND($_POST['sub'])!=NULL)
{
	if(isset($_POST['topic'])AND($_POST['topic'])!=NULL)
{

		$rsh=trim($_POST['hash']);
	$sub=trim($_POST['sub']);
			// $url=trim($_POST['url']);
			$topic=trim($_POST['topic']);
			$obj->tr_std_class($lkey,$sem,$sub,$topic,$rsh);
// echo$rsh;exit;

	


	}
	else
		echo"<script>alert('Topic is empty')</script>";

	}
	else
		echo"<script>alert('Subject is empty')</script>";
}
}



$class=$obj->tr_std_class_fetch($sem,$lkey);
$smartyObj->assign("data",$class);



$smartyObj->display('teacher_sub_header.tpl');
$smartyObj->display('tr_std_class.tpl');
$smartyObj->display('teacher_footer.tpl');
?>