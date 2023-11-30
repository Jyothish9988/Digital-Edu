<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

require "PHPMailer/PHPMailerAutoload.php";
$obj =new userclass();


$curdate=date('Y-m-d');
$ex=explode('-',$curdate);
$year=$ex[0];
$month=$ex[1];
$day=$ex[2];
$prevyear=$year-18;
$prevdate=$prevyear.'-'.$month.'-'.$day;
$smartyObj->assign('prevdate',$prevdate);


if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

	if(isset($_POST['adno'])AND($_POST['adno'])!=NULL)
	{
	
		if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
		{
			if(isset($_POST['name2'])AND($_POST['name2'])!=NULL)
		{

			if(isset($_POST['address'])AND($_POST['address'])!=NULL)
			{

				if(isset($_POST['sex'])AND($_POST['sex'])!=NULL)
				{
					if(isset($_POST['pin'])AND($_POST['pin'])!=NULL)
			{


			if(isset($_POST['dep'])AND($_POST['dep'])!=NULL)
			{
				if(isset($_POST['dob'])AND($_POST['dob'])!=NULL)
			{
			if(isset($_POST['doj'])AND($_POST['doj'])!=NULL)
			{
			
				if(isset($_POST['grad'])AND($_POST['grad'])!=NULL)
				{
					if(isset($_POST['adharno'])AND($_POST['adharno'])!=NULL)
				{
					if(isset($_POST['spno'])AND($_POST['spno'])!=NULL)
										{
											if(isset($_POST['email'])AND($_POST['email'])!=NULL)
										{
											

											$adno=trim($_POST['adno']);
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$dep=trim($_POST['dep']);
											$doj=trim($_POST['doj']);
											$grad=trim($_POST['grad']);
											$spno=trim($_POST['spno']);
											$adharno=trim($_POST['adharno']);
											$address=trim($_POST['address']);
											$pin=trim($_POST['pin']);
											$sex=trim($_POST['sex']);
											$dob=trim($_POST['dob']);
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
$mail->FromName = "DigitalEDU";

// set To
$mail->AddAddress("$email");
// $mail->AddAddress = "$email" ;
// set Subject
$mail->Subject = "Admission";

// set body
$mail->Body = "Dear $name1 $name2, Greetings from Digital Edu! Congratulations! You have fulfilled the selection criteria of the UG process and have been  selected on merit basis for the UG Program 2023 Batch. Visit the student dashboard  to proceed with the admission process using admission no $adno and contactnumber($spno). Best Wishes";

// send mail

if(!$mail->Send()) {
  echo "<script>alert('Email send failed')</script>" . $mail->ErrorInfo;
} else {
  echo "<script>alert('Message has been sent')</script>";
}




























									 $obj->add_student($adno,$name1,$name2,$dep,$doj,$grad,$spno,$_FILES['photo'],$adharno,$address,$pin,$sex,$dob,$email);
										}
									}
								}
							}
						}
					}
				}
				}

				}
			}
		}
	}
}
}
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('add_student.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>