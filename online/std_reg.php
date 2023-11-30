<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['adno'])AND($_POST['adno'])!=NULL)
				{
					if(isset($_POST['spno'])AND($_POST['spno'])!=NULL)
				{

					$adno=$_POST['adno'];
					$spno=$_POST['spno'];
					$obj->std_reg($adno,$spno);
				}
			}
		}
			
			
// $smartyObj->display('student_sub_header.tpl');
$smartyObj->display('std_reg.tpl');
?>