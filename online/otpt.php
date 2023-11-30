<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
require "PHPMailer/PHPMailerAutoload.php";

$obj=new userclass();

$lkey=$_GET['lkey'];
$otp=$_GET['otp'];

$email=$obj->totp_send($lkey);
$smartyObj->assign("email",$email);




$mail = new PHPMailer();

// Set mailer to use SMTP
$mail->IsSMTP();

// Specify main and backup server
$mail->Host = "smtp.gmail.com";

// set authentication
$mail->SMTPAuth = true;

// username
$mail->Username = "edudigital643@gmail.com";

// password
$mail->Password = "ikafxigrsooqyqra";
$mail->Port = 587; 
// set From
$mail->From = "edudigital643@gmail.com";

// set From Name
$mail->FromName = "Digital Edu";

// set To
$mail->AddAddress("$email");
// $mail->AddAddress = "$email" ;
// set Subject
$mail->Subject = "OTP !!";

// set body
$mail->Body = "Dear Teacher, Your login otp is $otp";

// send mail

if(!$mail->Send()) {
  echo "<script>alert('Email send failed')</script>" . $mail->ErrorInfo;
} else {
  echo "<script>alert('OTP has been sent')</script>";
}












if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

	if(isset($_POST['otp'])AND($_POST['otp'])!=NULL)
				{
					

					$otp=$_POST['otp'];

					
					$obj->otpt($otp,$lkey);
				
			}
		}

$smartyObj->display('otps.tpl');
?>