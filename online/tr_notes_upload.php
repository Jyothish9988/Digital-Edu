<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['sname'])AND($_POST['sname'])!=NULL)
	{
	
		if(isset($_POST['topic'])AND($_POST['topic'])!=NULL)
		{
			if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
		{
			if(isset($_POST['type'])AND($_POST['type'])!=NULL)
		{
			
											$sname=trim($_POST['sname']);
											$topic=trim($_POST['topic']);
											$sem=trim($_POST['sem']);
											$type=trim($_POST['type']);
											$obj->tr_notes_upload($lkey,$sname,$topic,$sem,$type,$_FILES['note']);
										
			}
		}
		}
	}
}
$smartyObj->display('teacher_sub_header2.tpl');
$smartyObj->display('tr_notes_upload.tpl');
$smartyObj->display('teacher_footer.tpl');
?>