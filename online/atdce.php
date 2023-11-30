<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];

$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$sub1=$_GET['subject'];
$smartyObj->assign("sub1",$sub1);
$subject=$sub1;
$obj->fullday($sem);




$k=$obj->tr_std_attendance_present_fetch($sem);
$smartyObj->assign("absent",$k);
//roll number
$smartyObj->assign("r",1);
//sub begin
date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	$time=date('H:i:s');
	$time2=explode(':',$time);
	$time3=$time2[0]+1;
	$time4=$time3.':'.$time2[1].':'.$time2[2];
	$time5=strtotime($time);
	//subject select


	// echo strtotime("9:30:00");


					if($time5>=strtotime("9:30:00") AND $time5<=strtotime("10:29:59"))
				{
					$sub="s1";
				}
					elseif($time5>=strtotime("10:30:00") AND $time5<=strtotime("11:29:59"))
				{
					$sub="s2";
				}
						elseif($time5>=strtotime("11:30:00") AND $time5<=strtotime("12:29:59"))
				{
					$sub="s3";
				}
					elseif($time5>=strtotime("12:30:00") AND $time5<=strtotime("13:29:59"))
				{
					$sub="end";
					// echo"p2";
				}
					elseif($time5>=strtotime("13:30:00") AND $time5<=strtotime("14:29:59"))
				{
					$sub="s4";
				}
					elseif($time5>=strtotime("14:30:00") AND $time5<=strtotime("15:29:59"))
				{
					$sub="s5";
				}
					elseif($time5>=strtotime("15:29:59") AND $time5<=strtotime("16:14:59"))
				{
					$sub="s6";
				}
				else
				{
					$sub="end";
					// echo"p3";
				}
				// echo$time;
				// echo$time5;
				// echo$sub;exit;
$smartyObj->assign("sub",$sub);
// echo$sub;exit;
//sub end
if($sub!="end")
{

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(empty($_POST['present']))
	{
		$_POST['present']=null;
	}

	if(empty($_POST['absent']))
	{
		$_POST['absent']=null;
	}

	$present=null;
	$absent=null;
	if($present!=null)
	{
		$present=$_POST['present'];
	}
	else if($absent!=null)
	{
		$absent=$_POST['absent'];
	}
	else
	{
		$present=$_POST['present'];
		$absent=$_POST['absent'];
	}
	
	// print_r($present);exit;
	$arr3=array();
	if($present!=null AND $absent!=null)
	{
	$arr3[]=array_merge($present,$absent);
}
else if($present==null AND $absent!=null)
{
	$arr3[]=$absent;
}
else
{
	$arr3[]=$present;
}
	// print_r($arr3);exit;
	
	foreach( $arr3 as $stdkey)
{
	$s=$obj->present($sem,$subject,$lkey,$stdkey);
}
}



$smartyObj->display('atdce.tpl');
$smartyObj->display('teacher_footer.tpl');

}
elseif($time5>=strtotime("12:30:00") AND $time5<=strtotime("13:29:59"))
	{
		echo"<script>alert('lunch break');</script>";
}
else{
	echo"<script>alert('OFF TIME');</script>";
}

?>



