<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj =new userclass();
$lkey=$_COOKIE['lkey'];
$tr_key=$_GET['tr_key'];
$data=$obj->admin_new_enrolled_tr_edit($tr_key);
$smartyObj->assign("data",$data);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['trid'])AND($_POST['trid'])!=NULL)
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
					if(isset($_POST['doj'])AND($_POST['doj'])!=NULL)
				{
					if(isset($_POST['sex'])AND($_POST['sex'])!=NULL)
				{
					if(isset($_POST['quan'])AND($_POST['quan'])!=NULL)

				{
					if(isset($_POST['tpno'])AND($_POST['tpno'])!=NULL)
				{
					if(isset($_POST['adharno'])AND($_POST['adharno'])!=NULL)
				{


				
											$trid=trim($_POST['trid']);
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$address=trim($_POST['address']);
											$pin=trim($_POST['pin']);
											$dob=trim($_POST['dob']);
											$sex=trim($_POST['sex']);
											$quan=trim($_POST['quan']);
											$tpno=trim($_POST['tpno']);
											$adharno=trim($_POST['adharno']);
											$doj=trim($_POST['doj']);
									



											$obj->admin_edit_newly_enrolled_tr($trid,$name1,$name2,$address,$pin,$dob,$sex,$quan,$tpno,$adharno,$_FILES['photo'],$lkey,$doj,$tr_key);
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
$smartyObj->display('tr_edit.tpl');
$smartyObj->display('admin_footer.tpl');
?>