<?php 
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$lkey=$_COOKIE['lkey'];

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['bnam'])AND($_POST['bnam'])!=NULL)
	{
		
	if(isset($_POST['ban'])AND($_POST['ban'])!=NULL)
		{

	if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
		{

	if(isset($_POST['sem'])AND($_POST['sem'])!=NULL)
		{
			

				$bnam=trim($_POST['bnam']);
				$ban=trim($_POST['ban']);
				$subject=trim($_POST['subject']);
				$sem=trim($_POST['sem']);
				$obj->add_books($bnam,$_FILES,$ban,$subject,$sem);
		}
	}
		}
	}
}



$smartyObj->display('librarian_header.tpl');
$smartyObj->display('add_books.tpl');
$smartyObj->display('librarian_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>