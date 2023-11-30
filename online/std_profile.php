<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$std_key=$obj->lkeytostdkey($lkey);
$smartyObj->assign("std_key",$std_key);

$s=$obj->std_ver($std_key);
$smartyObj->assign("data",$s);
		
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

							if(isset($_POST['religion'])AND($_POST['religion'])!=NULL)
							{

								if(isset($_POST['caste'])AND($_POST['caste'])!=NULL)
									
									{

									
									if(isset($_POST['fname'])AND($_POST['fname'])!=NULL)
									{

										
										if(isset($_POST['fjob'])AND($_POST['fjob'])!=NULL)
										{
											if(isset($_POST['fpno'])AND($_POST['fpno'])!=NULL)
										{
											if(isset($_POST['mname'])AND($_POST['mname'])!=NULL)
										{
											if(isset($_POST['mjob'])AND($_POST['mjob'])!=NULL)
										{
											if(isset($_POST['mpno'])AND($_POST['mpno'])!=NULL)
										{
									
											if(isset($_POST['spno'])AND($_POST['spno'])!=NULL)
										{
							
											if(isset($_POST['doj'])AND($_POST['doj'])!=NULL)
										{
											if(isset($_POST['grad'])AND($_POST['grad'])!=NULL)
										{
											if(isset($_POST['email'])AND($_POST['email'])!=NULL)
										{
											
									
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$address=trim($_POST['address']);
											$pin=trim($_POST['pin']);
											$dob=trim($_POST['dob']);
											$sex=trim($_POST['sex']);
											$religion=trim($_POST['religion']);
											$caste=trim($_POST['caste']);
											$fname=trim($_POST['fname']);
											$fjob=trim($_POST['fjob']);
											$fpno=trim($_POST['fpno']);
											$mname=trim($_POST['mname']);
											$mjob=trim($_POST['mjob']);
											$mpno=trim($_POST['mpno']);
											$spno=trim($_POST['spno']);
											$doj=trim($_POST['doj']);
											$grad=trim($_POST['grad']);
											$email=trim($_POST['email']);
											
											$obj->std_profile_update($std_key,$name1,$name2,$address,$pin,$dob,$sex,$religion,$caste,$fname,$fjob,$fpno,$mname,$mjob,$mpno,$spno,$doj,$grad,$email);
										
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
}
}
}
}
}
}
}
}
}


													

			

$smartyObj->display('std_profile.tpl');
?>