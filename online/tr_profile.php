<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$tr_key=$obj->lkeytotrkey($lkey);
$smartyObj->assign("tr_key",$tr_key);
$s=$obj->tr_ver($tr_key);
		
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	
	
		if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
		{
			if(isset($_POST['name2'])AND($_POST['name2'])!=NULL)
		{
			if(isset($_POST['address'])AND($_POST['address'])!=NULL)
			{
			if(isset($_POST['pin'])AND($_POST['pin'])!=NULL)
			{
			
				if(isset($_POST['dob'])AND($_POST['dob'])!=NULL)
				{
					if(isset($_POST['sex'])AND($_POST['sex'])!=NULL)
				{
					
					if(isset($_POST['quan'])AND($_POST['quan'])!=NULL)
				{
					if(isset($_POST['email'])AND($_POST['email'])!=NULL)
				{

				
											
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$address=trim($_POST['address']);
											$pin=trim($_POST['pin']);
											$dob=trim($_POST['dob']);
											$sex=trim($_POST['sex']);
											$quan=trim($_POST['quan']);
											$email=trim($_POST['email']);




											$obj->tr_profile_update($tr_key,$name1,$name2,$address,$pin,$dob,$sex,$quan,$email);
										}
									}
								}

				}
			}
		}
	}
}
}

$smartyObj->assign("data",$s);
$smartyObj->display('tr_profile.tpl');
?>

