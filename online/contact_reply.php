<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

require "PHPMailer/PHPMailerAutoload.php";
$obj= new userclass();

$lkey=$_COOKIE['lkey'];

$key=$_GET['key'];

$email=$obj->c_reply($key);
$smartyObj->assign("email",$email);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
{
	if(isset($_POST['message'])AND($_POST['message'])!=NULL)
	{
		if(isset($_POST['email'])AND($_POST['email'])!=NULL)
	{
		
			$subject=trim($_POST['subject']);
			$message=trim($_POST['message']);
			$email=trim($_POST['email']);
			


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
$mail->Subject = "$subject";

// set body
$mail->Body = "$message";

// send mail

if(!$mail->Send()) {
  echo "<script>alert('Email send failed')</script>" . $mail->ErrorInfo;
} else {
  echo "<script>alert('Message has been sent')</script>";
}



			// $obj->contact_reply($lkey,$subject,$message,$email);
		
	}
	else
		echo"<script>alert('Email is empty')</script>";
}
else
echo"<script>alert('Message is empty')</script>";
}

}




$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('contact_reply.tpl');

$smartyObj->display('admin_footer.tpl');
?>
