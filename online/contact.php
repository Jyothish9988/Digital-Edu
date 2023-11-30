<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['desig'])AND($_POST['desig'])!=NULL)
	{
	
		if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
		{
			if(isset($_POST['name2'])AND($_POST['name2'])!=NULL)
		{
			if(isset($_POST['email'])AND($_POST['email'])!=NULL)
			{
			if(isset($_POST['contact'])AND($_POST['contact'])!=NULL)
			{
			
				if(isset($_POST['id'])AND($_POST['id'])!=NULL)
				{
					if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
						{
					if(isset($_POST['message'])AND($_POST['message'])!=NULL)
										{
											$desig=trim($_POST['desig']);
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$email=trim($_POST['email']);
											$contact=trim($_POST['contact']);
											$id=trim($_POST['id']);
											$subject=trim($_POST['subject']);
											$message=trim($_POST['message']);
											$obj->contact($desig,$name1,$name2,$email,$contact,$id,$subject,$message);
										}
									}
								}

				}
			}
		}
	}
}
}
$smartyObj->display('index_header.tpl');
$smartyObj->display('contact.tpl');
$smartyObj->display('index_footer.tpl');


?>