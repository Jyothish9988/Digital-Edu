<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj =new userclass();
$lkey=$_COOKIE['lkey'];
$std_key=$_GET['std_key'];
$data=$obj->admin_new_enrolled_std_edit($std_key);
$smartyObj->assign("data",$data);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

	if(isset($_POST['adno'])AND($_POST['adno'])!=NULL)
	{
	
		if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
		{
			if(isset($_POST['name2'])AND($_POST['name2'])!=NULL)
		{

			if(isset($_POST['address'])AND($_POST['address'])!=NULL)
			{

				if(isset($_POST['sex'])AND($_POST['sex'])!=NULL)
				{
					if(isset($_POST['pin'])AND($_POST['pin'])!=NULL)
			{


			if(isset($_POST['dep'])AND($_POST['dep'])!=NULL)
			{
				if(isset($_POST['dob'])AND($_POST['dob'])!=NULL)
			{
			if(isset($_POST['doj'])AND($_POST['doj'])!=NULL)
			{
			
				if(isset($_POST['grad'])AND($_POST['grad'])!=NULL)
				{
					if(isset($_POST['adharno'])AND($_POST['adharno'])!=NULL)
				{
					if(isset($_POST['spno'])AND($_POST['spno'])!=NULL)
										{
											

											$adno=trim($_POST['adno']);
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$dep=trim($_POST['dep']);
											$doj=trim($_POST['doj']);
											$grad=trim($_POST['grad']);
											$spno=trim($_POST['spno']);
											$adharno=trim($_POST['adharno']);
											$address=trim($_POST['address']);
											$pin=trim($_POST['pin']);
											$sex=trim($_POST['sex']);
											$dob=trim($_POST['dob']);
									 $obj->admin_edit_newly_enrolled_std($adno,$name1,$name2,$dep,$doj,$grad,$spno,$_FILES['photo'],$adharno,$address,$pin,$sex,$dob,$std_key);
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
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('std_edit.tpl');
$smartyObj->display('admin_footer.tpl');
?>