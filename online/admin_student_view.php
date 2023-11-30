<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass(); 
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$y=$obj->all_student_info($sem);
// $z=$obj->new_student_info($sem);
$smartyObj->assign("view1",$y);
// $smartyObj->assign("view2",$z);
$smartyObj->display('admin_header.tpl');
$smartyObj->display('admin_student_view.tpl');
// $smartyObj->display('admin_footer.tpl');


// if(isset($_POST['hide'])AND($_POST['hide'])=="h")
// {



//     $stddlt=$_POST['stddlt'];

//   foreach( $stddlt as $stdkey)
// {

//   $s=$obj->admin_delete_std($sem,$stdkey);
// }


// }
}
else
{	
	Header("location:login.php");
}
?>



