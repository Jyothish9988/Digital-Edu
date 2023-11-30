<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_GET['lkey'];
$otp=$_GET['otp'];

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

	if(isset($_POST['otp'])AND($_POST['otp'])!=NULL)
				{
					

					$otp=$_POST['otp'];

					
					$obj->otp($otp,$lkey);
				
			}
		}

$smartyObj->display('otp.tpl');
?>