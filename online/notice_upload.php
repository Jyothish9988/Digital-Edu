<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();


$lkey=$_COOKIE['lkey'];


if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['title'])AND($_POST['title'])!=NULL)
{
	if(isset($_POST['notice'])AND($_POST['notice'])!=NULL)
	{
		
			$title=trim($_POST['title']);
			$notice=trim($_POST['notice']);
			$obj->notice_upload($title,$notice);
		
	}
	else
		echo"<script>alert('notice is empty')</script>";
}
else
echo"<script>alert('Title is empty')</script>";
}


$smartyObj->display('librarian_header.tpl');
$smartyObj->display('notice_upload.tpl');
$smartyObj->display('librarian_footer.tpl');

?>






