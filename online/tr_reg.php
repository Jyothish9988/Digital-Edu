<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['trid'])AND($_POST['trid'])!=NULL)
				{
					if(isset($_POST['tpno'])AND($_POST['tpno'])!=NULL)
				{

					$trid=$_POST['trid'];
					$tpno=$_POST['tpno'];
					$obj->tr_reg($trid,$tpno);
				}
			}
		}
			
			
// $smartyObj->display('student_sub_header.tpl');
$smartyObj->display('tr_reg.tpl');
?>