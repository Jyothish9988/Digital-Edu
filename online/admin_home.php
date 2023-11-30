<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
// $sem=$_GET['sem'];
$sem=$_GET['sem'];

$student=$obj->count_student();
$smartyObj->assign("student",$student);


$teacher=$obj->count_teacher();
$smartyObj->assign("teacher",$teacher);

$book=$obj->count_book();
$smartyObj->assign("book",$book);

$notice=$obj->count_notice();
$smartyObj->assign("notice",$notice);

$amt=$obj->count_amt();
$smartyObj->assign("amt",$amt);

// echo$sem;exit;
$smartyObj->assign("sem",$sem);
$smartyObj->display('admin_sem_header.tpl');
}
else
{	
	Header("location:login.php");
}
?>