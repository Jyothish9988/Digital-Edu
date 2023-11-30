<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
{
	if(isset($_POST['year'])AND($_POST['year'])!=NULL)
{
	if(isset($_POST['day'])AND($_POST['day'])!=NULL)
{
	if(isset($_POST['s1'])AND($_POST['s1'])!=NULL)
{
	if(isset($_POST['s2'])AND($_POST['s2'])!=NULL)
{
	if(isset($_POST['s3'])AND($_POST['s3'])!=NULL)
{
	if(isset($_POST['s4'])AND($_POST['s4'])!=NULL)
{
	if(isset($_POST['s5'])AND($_POST['s5'])!=NULL)
{
	if(isset($_POST['s6'])AND($_POST['s6'])!=NULL)
{

	
		
			$day=trim($_POST['day']);
			$s1=trim($_POST['s1']);
			$s2=trim($_POST['s2']);
			$s3=trim($_POST['s3']);
			$s4=trim($_POST['s4']);
			$s5=trim($_POST['s5']);
			$s6=trim($_POST['s6']);
			$sem=trim($_POST['sem']);
			$year=trim($_POST['year']);
			$obj->timetable_upload($day,$s1,$s2,$s3,$s4,$s5,$s6,$sem,$year);
		}
		else
			echo"<script>alert('Report1 is empty')</script>";
		}
		else
			echo"<script>alert('Report2 is empty')</script>";
	}
	else
		echo"<script>alert('Report3 is empty')</script>";
	}
	else
		echo"<script>alert('Report4 is empty')</script>";
	}
	else
		echo"<script>alert('Report5 is empty')</script>";
	}
	else
		echo"<script>alert('Report6 is empty')</script>";
	}
	else
		echo"<script>alert('Report7 is empty')</script>";
	}
	else
		echo"<script>alert('Report8 is empty')</script>";
		
	}
	else
		echo"<script>alert('Report9 is empty')</script>";
}
// else
// echo"<script>alert('Title is empty')</script>";


$smartyObj->display('hod_main_header2.tpl');
$smartyObj->display('timetable_upload.tpl');
$smartyObj->display('hod_footer.tpl');
?>