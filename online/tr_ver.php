<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$tr_key=$_GET['tr_key'];
$d=$obj->tr_ver($tr_key);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['pswd'])AND($_POST['pswd'])!=NULL)
				{
					
					$pswd=$_POST['pswd'];
					$obj->tr_pswd($pswd,$tr_key);
				}
			}
$smartyObj->assign("data",$d);
$smartyObj->display('tr_ver.tpl');
?>



