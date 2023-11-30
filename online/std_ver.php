<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$std_key=$_GET['std_key'];
$d=$obj->std_ver($std_key);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['pswd'])AND($_POST['pswd'])!=NULL)
				{
					
					$pswd=$_POST['pswd'];
					$obj->std_pswd($pswd,$std_key);
				}
			}
$smartyObj->assign("data",$d);
$smartyObj->display('std_ver.tpl');
?>



