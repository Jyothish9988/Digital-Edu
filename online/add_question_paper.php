<?php 
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
	{
		
	if(isset($_POST['year'])AND($_POST['year'])!=NULL)
		{

			

				$subject=trim($_POST['subject']);
				$year=trim($_POST['year']);
				
				$obj->add_question_paper($subject,$year,$_FILES['img1']);
		
		}
	}
}



$smartyObj->display('librarian_header.tpl');
$smartyObj->display('add_question_paper.tpl');
// $smartyObj->display('librarian_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>