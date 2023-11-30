<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$lkey=$_COOKIE['lkey'];
$asem=$_GET['asem'];

$smartyObj->assign("asem",$asem);
// $pakey=$_GET['pakey'];//from admin pension amount 
// $p_key=$_GET['p_key'];//from admin_pension_approved_view.tpl
$obj=new userclass();
// session_start();
// if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
// {

$std_key=$obj->lkeytostdkey($lkey);
$obj->feesemcheck($asem,$std_key);



$s=$obj->fetch_sem_fee($std_key,$asem);
// echo$s;exit;
$smartyObj->assign("view1",$s);
// $fee=trim($_POST['fee']);
// echo$fee;exit;

// echo"h1i";exit;

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{			
	// echo "h1i";exit;

	if(isset($_POST['fee'])AND($_POST['fee'])!=NULL)
{

if(isset($_POST['name'])AND($_POST['name'])!=NULL)
{
	if(isset($_POST['cardno'])AND($_POST['cardno'])!=NULL)
		{
	if(isset($_POST['cvv'])AND($_POST['cvv'])!=NULL)
		{
	if(isset($_POST['expirydate'])AND($_POST['expirydate'])!=NULL)
		
		{
			// echo"hi";exit;
			$fee=trim($_POST['fee']);
			$name=trim($_POST['name']);
			$cardno=trim($_POST['cardno']);
			$cvv=trim($_POST['cvv']);
			$expirydate=trim($_POST['expirydate']);
			$obj->payment($name,$cardno,$cvv,$expirydate,$fee,$std_key,$asem,$lkey);
		}
		else
			echo"<script>alert('Expiry Date is empty')</script>";
			

		}
											else
												echo"<script>alert('CVV is empty')</script>";
											}
											else
												echo"<script>alert('Card Number is empty')</script>";
											}
											else
												echo"<script>alert('Name is empty')</script>";
											}
											else
												echo"<script>alert('Fee is empty')</script>";
										}
										$smartyObj->display('payment.tpl');
										

// else
// {	
// 	Header("location:login.php");
// }
?>





