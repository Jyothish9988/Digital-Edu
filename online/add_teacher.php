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
	if(isset($_POST['trid'])AND($_POST['trid'])!=NULL)
	{
	
		if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
		{
			if(isset($_POST['name2'])AND($_POST['name2'])!=NULL)
		{
			if(isset($_POST['address'])AND($_POST['address'])!=NULL)
			{
			if(isset($_POST['pin'])AND($_POST['pin'])!=NULL)
			{
			
				if(isset($_POST['dob'])AND($_POST['dob'])!=NULL)
				{
					if(isset($_POST['doj'])AND($_POST['doj'])!=NULL)
				{
					if(isset($_POST['sex'])AND($_POST['sex'])!=NULL)
				{
					if(isset($_POST['quan'])AND($_POST['quan'])!=NULL)

				{
					if(isset($_POST['tpno'])AND($_POST['tpno'])!=NULL)
				{
					if(isset($_POST['adharno'])AND($_POST['adharno'])!=NULL)
				{
					if(isset($_POST['email'])AND($_POST['email'])!=NULL)
				{


				
											$trid=trim($_POST['trid']);
											$name1=trim($_POST['name1']);
											$name2=trim($_POST['name2']);
											$address=trim($_POST['address']);
											$pin=trim($_POST['pin']);
											$dob=trim($_POST['dob']);
											$sex=trim($_POST['sex']);
											$quan=trim($_POST['quan']);
											$tpno=trim($_POST['tpno']);
											$adharno=trim($_POST['adharno']);
											$doj=trim($_POST['doj']);
											$email=trim($_POST['email']);
									

$mail = new PHPMailer();

$mail->IsSMTP();


$mail->Host = "smtp.gmail.com";


$mail->SMTPAuth = true;


$mail->Username = "edudigital643@gmail.com";


$mail->Password = "ikafxigrsooqyqra";
$mail->Port = 587; 

$mail->From = "edudigital643@gmail.com";

$mail->FromName = "DigitalEDU";


$mail->AddAddress("$email");

$mail->Subject = "Admission";


$mail->Body = "Dear $name1 $name2, Greetings from Digital Edu! Congratulations! You have fulfilled the selection criteria  and have been  selected as the teacher UG Program 2023 Batch. Visit the Teacher dashboard  to proceed with the entry process using TeacherId  $trid and contactnumber($tpno). Best Wishes";


if(!$mail->Send()) {
  echo "<script>alert('Email send failed')</script>" . $mail->ErrorInfo;
} else {
  echo "<script>alert('Message has been sent')</script>";
}








											$obj->add_teacher($trid,$name1,$name2,$address,$pin,$dob,$sex,$quan,$tpno,$adharno,$_FILES['photo'],$lkey,$doj,$email);
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
$smartyObj->display('add_teacher.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>