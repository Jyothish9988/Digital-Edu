<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

	if(isset($_POST['bnam'])AND($_POST['bnam'])!=NULL)
		{
			if(isset($_POST['ban'])AND($_POST['ban'])!=NULL)
		{
			if(isset($_POST['bpn'])AND($_POST['bpn'])!=NULL)
		{
			if(isset($_POST['url'])AND($_POST['url'])!=NULL)
		{

			$bnam=trim($_POST['bnam']);
			$ban=trim($_POST['ban']);
			$bpn=trim($_POST['bpn']);
			$url=trim($_POST['url']);
			$obj->req_book_std($lkey,$bnam,$ban,$bpn,$url);
}
}
}
}
}

$smartyObj->display('library_sub_header.tpl');
$smartyObj->display('req_book.tpl');
$smartyObj->display('library_footer.tpl');
?>