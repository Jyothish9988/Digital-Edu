<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=NULL)
	{
		if(isset($_POST['password'])AND($_POST['password'])!=NULL)
		{

			$name=trim($_POST['name']);
			$password=trim($_POST['password']);
            
			$obj->login($name,$password);		
}
		
	}
	
}
$smartyObj->display('login.tpl');
?>