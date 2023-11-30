<?php
class userclass
{
// ----------------------------------------------STUDENT module start---------------------------------------------------
	function std_reg($adno,$spno)
	{
		//otp generation
		$otp=rand(999,9999);
		$enc=md5($otp);
		//std_key fetching
		$qry="select std_key from stdreg where adno='".$adno."' AND spno='".$spno."'";
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['std_key'];
		}
		//pwd checking
		$qry1="select pwd from login inner join stdreg on stdreg.adno=login.user where login.user='".$adno."' and stdreg.spno='".$spno."'";
		// echo$qry1;exit;
		$exe1=mysql_query($qry1);
		$enc1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$enc1=$rr['pwd'];
		}
		if($enc1!=null)
		{
			$qry2="update login inner join stdreg set pwd='".$enc."' where login.user='".$adno."' and stdreg.spno='".$spno."'";
// echo$qry2;exit;
			$exe2=mysql_query($qry2);
			if($exe2)
			header("location:otps.php?lkey=$arr&&otp=$otp");
			else
				echo"OTP error";
		}
		
	else 
	{
		
		if($arr!=null)
		{

			
			$lkey=uniquekey("login","lkey");
			$qry1="insert into login(lkey,user,pwd,utyp) values ('".$lkey."','".$adno."','".$enc."','4')";
			$exe1=mysql_query($qry1);
			$id=keytoid("login","lkey",$lkey);
			$qry2="update stdreg set lid='".$id."' where adno='".$adno."' and spno='".$spno."'";
			$exe2=mysql_query($qry2);
			if($exe1&&$exe2)
			header("location:otps.php?lkey=$arr&&otp=$otp");
		}
		else
			echo "<script>alert('Input details not found !!')</script>";
	}
	
}


	function otps($otp,$lkey)
	{
		$enc=md5($otp);
		$qry1="select adno from stdreg where std_key='".$lkey."'";
		$exe1=mysql_query($qry1);
		$arr1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$arr1=$rr['adno'];
		}
		
		
		$qry="select pwd from login where user='".$arr1."' and utyp='4'";
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['pwd'];
		}
		if($enc==$arr)
		{
			header("location:std_ver.php?std_key=$lkey");

		}
		else
		{
			echo "<script>alert('INVALID OTP ! !')</script>";
		}
	}

	function std_ver($std_key)
	{

		$qry="select * from stdreg where std_key='".$std_key."'";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	}



	function std_pswd($pswd,$std_key)
	{

		$enc=md5($pswd);
		//fetching adno
		$qry1="select adno from stdreg where std_key='".$std_key."'";
		$exe1=mysql_query($qry1);
		$arr1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$arr1=$rr['adno'];
		}
		//inserting password in login table
		$qry="update login set password='".$enc."' where user='".$arr1."'";
		$exe=mysql_query($qry);

		if($exe&&$exe1)
		{
			echo"<script>alert('password submitted')</script>";
			header("location:index.php?std_key=$std_key");
		}
		else
		{
				echo"<script>alert('password submitted unsuccessful')</script>";	
		}



	}



	function lkeytostdkey($lkey)
	{
		$qry="select std_key from stdreg inner join login on login.user=stdreg.adno where lkey='".$lkey."'";
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['std_key'];
		}
		return $arr;

	}



function std_profile_update($std_key,$name1,$name2,$address,$pin,$dob,$sex,$religion,$caste,$fname,$fjob,$fpno,$mname,$mjob,$mpno,$spno,$doj,$grad,$email)
{
	$qry="update stdreg set name1='".$name1."',name2='".$name2."',address='".$address."',pin='".$pin."',dob='".$dob."',sex='".$sex."',religion='".$religion."',caste='".$caste."',fname='".$fname."',fjob='".$fjob."',fpno='".$fpno."',mname='".$mname."',mjob='".$mjob."',grad='".$grad."',email='".$email."' where std_key='".$std_key."'";
	
	$exe=mysql_query($qry);
	if($exe)
		header("location:std_profile.php");

}


function req_book_std($lkey,$bnam,$ban,$bpn,$url)
{
	date_default_timezone_set("Asia/Kolkata");
    $lid=keytoid("login","lkey",$lkey);
	$ibkey=uniquekey("req_book","ibkey");
	$date=date('Y-m-d');
	$qry1="insert into req_book (ibkey,bnam,ban,url,bpn,date,lid) values('".$ibkey."','".$bnam."','".$ban."','".$url."','".$bpn."','".$date."','".$lid."')";
	
	$exe1=mysql_query($qry1);
	if($exe1)
		echo"<script>alert('Book requested!')</script>";
	
}

function req_book_tr($lkey,$bnam,$ban,$bpn,$url)
{
	date_default_timezone_set("Asia/Kolkata");
    $lid=keytoid("login","lkey",$lkey);
	$ibkey=uniquekey("req_book","ibkey");
	$date=date('Y-m-d');
	$qry1="insert into req_book (ibkey,bnam,ban,url,bpn,date,lid) values('".$ibkey."','".$bnam."','".$ban."','".$url."','".$bpn."','".$date."','".$lid."')";
	
	$exe1=mysql_query($qry1);
	if($exe1)
		echo"<script>alert('Book requested!')</script>";
	
}


function unlock_sem($std_key)
{

  date_default_timezone_set("Asia/Kolkata");
  $qry="select doj,month,sem from stdreg where std_key='".$std_key."'";
  // echo $qry;exit;
  $exe=mysql_query($qry);
  $doj=null;
  $month=null;
  $sem=null;
    while($rr=mysql_fetch_array($exe))
    {
      $month=$rr['month'];
      $sem=$rr['sem'];
      $doj=$rr['doj'];
    }
    $ymdoj=explode('-',$doj);
  $currdate=date('Y-m-d');
  $currmonth=explode('-',$currdate);
// echo$currmonth[1];
  $monthgap=$currmonth[1]-$ymdoj[1]+($currmonth[0]-$ymdoj[0])*12;
// echo$monthgap;exit;

$semgap=(int)($monthgap/6);

if($semgap<=0)
{
  $semgap=1;
  $currsem=1;
}
else if($semgap==1)
{
  $currsem=2;
}

else if($semgap==2)
{
    $currsem=3;
}
else if($semgap==3)
{
  $currsem=4;
}
else if($semgap==4)
{
  $currsem=5;
}
else if($semgap==5)
{
  $currsem=6;
}
else
{
  $currsem=6;
}


// echo$currsem;exit;
// echo$semgap;exit;

  $qry1="update stdreg set sem='".$currsem."',month='".$currmonth[1]."' where std_key='".$std_key."'";
  $exe1=mysql_query($qry1);
}


function fetch_sem($std_key)
{
	$qry="select * from stdreg where std_key='".$std_key."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;

}

function timetable_view($sem) 
{
	
	$qry="select * from timetable where sem='".$sem."' ";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function std_leave_apply($title,$report,$lkey,$sem)
{
	date_default_timezone_set("Asia/Kolkata");
	$lid=keytoid("login","lkey",$lkey);
	$lekey=uniquekey("leaves","lekey");
	$date=date('Y-m-d');
	$qry="insert into leaves(title,report,date,lekey,lid,sem)values('".$title."','".$report."','".$date."','".$lekey."','".$lid."','".$sem."')";
	//echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Leave submission successfull')</script>";
		
}
	else
		echo"<script>alert('Leave submission unsuccessful')</script>";

}
function std_leave_apply_view($lkey,$sem)
{
	$lid=keytoid("login","lkey",$lkey);
$qry="select * from leaves inner join stdreg on leaves.lid=stdreg.lid where leaves.lid='".$lid."' and leaves.sem='".$sem."'";
 // echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}


function std_leave_apply_edit_view($lekey)
{
	
$qry="select * from leaves where lekey='".$lekey."'";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}


function std_leave_apply_view_edit_submit($title,$report,$lekey,$sem)
{
	$qry="update leaves set title='".$title."',report='".$report."',sem='".$sem."' where lekey='".$lekey."'";
	
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('leave submitted');window.location.href='std_leave_apply_view.php?sem=$sem';</script>";
		
}
	else
		echo"<script>alert('leave not submitted');window.location.href='std_leave_apply_view.php?sem=$sem';</script>";

}

function std_leave_apply_delete($lekey,$sem)
{
	$qry="delete  from leaves where lekey='".$lekey."'";
	 // echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='std_leave_apply_view.php?sem=$sem';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='std_leave_apply_view.php?sem=$sem';</script>";
    }
}

// ----------------------------------------------STUDENT module end---------------------------------------------------

// ------------------------------------------------TEACHER module-------------------------------------------------------

	function tr_reg($trid,$tpno)
	{
		//otp generation
		$otp=rand(999,9999);
		$enc=md5($otp);
		//std_key fetching
		$qry="select tr_key from trreg where trid='".$trid."' AND tpno='".$tpno."'";
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['tr_key'];
		}
		//pwd checking
		$qry1="select pwd from login inner join trreg on login.user=trreg.trid where login.user='".$trid."' and trreg.tpno='".$tpno."' and login.utyp='3'";

		$exe1=mysql_query($qry1);
		$enc1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$enc1=$rr['pwd'];
		}
		if($enc1!=null)
		{
			$qry2="update login inner join trreg set pwd='".$enc."' where login.user='".$trid."' and trreg.tpno='".$tpno."'";
			
			$exe2=mysql_query($qry2);
			if($exe2)
			
			header("location:otpt.php?lkey=$arr&&otp=$otp");
		    
			else
			
				echo"OTP error";
			
		}
		
	else
	{
		
		if($arr!=null)
		{
			$lkey=uniquekey("login","lkey");
			$qry1="insert into login(lkey,user,pwd,utyp) values ('".$lkey."','".$trid."','".$enc."','3')";
			$exe1=mysql_query($qry1);
			$lid=keytoid("login","lkey",$lkey);
			$qry2="update trreg set lid='".$lid."' where trid='".$trid."' and tpno='".$tpno."'";
			$exe2=mysql_query($qry2);

			if($exe1&&$exe2)
				
					header("location:otpt.php?lkey=$arr&&otp=$otp");
				}
			else
				
					echo "<script>alert('Input details not found !!')</script>";
				
		}
	
	}


	function otpt($otp,$lkey)
	{
		$enc=md5($otp);
		$qry1="select trid from trreg where tr_key='".$lkey."'";
		$exe1=mysql_query($qry1);
		$arr1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$arr1=$rr['trid'];
		}
		
		
		$qry="select pwd from login where user='".$arr1."' and utyp='3'";
		// echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['pwd'];
		}
		if($enc==$arr)
		{
			header("location:tr_ver.php?tr_key=$lkey");

		}
		else
		{
			echo "<script>alert('INVALID OTP ! !')</script>";
		}
	}
	function tr_ver($tr_key)
	{
		
		$qry="select * from trreg where tr_key='".$tr_key."'";
		$exe=mysql_query($qry);
		$arr=array();
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	}



	function tr_pswd($pswd,$tr_key)
	{

		$enc=md5($pswd);
		//fetching trid
		$qry1="select trid from trreg where tr_key='".$tr_key."'";
		$exe1=mysql_query($qry1);
		$arr1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$arr1=$rr['trid'];
		}
		//inserting password in login table
		$qry="update login set password='".$enc."' where user='".$arr1."'";
		$exe=mysql_query($qry);

		if($exe&&$exe1)
		{
			echo"<script>alert('password submitted')</script>";
			header("location:index.php?tr_key=$tr_key");
		}
		else
		{
				echo"<script>alert('password submitted unsuccessful')</script>";	
		}



	}



	function lkeytotrkey($lkey)
	{
		$qry="select tr_key from trreg inner join login on login.user=trreg.trid where lkey='".$lkey."'";
		// echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['tr_key'];
		}
		return $arr;

	}





function tr_profile_update($tr_key,$name1,$name2,$address,$pin,$dob,$sex,$quan,$email)
{
	
	$qry="update trreg set name1='".$name1."',name2='".$name2."',address='".$address."',pin='".$pin."',dob='".$dob."',sex='".$sex."',quan='".$quan."',email='".$email."' where tr_key='".$tr_key."'";
	$exe=mysql_query($qry);
	if($exe)
		header("location:tr_profile.php");

}



function tr_notes_upload($lkey,$sname,$topic,$sem,$type,$files=NULL)
{
	date_default_timezone_set("Asia/Kolkata");
	
    $lid=keytoid("login","lkey",$lkey);
	$ntkey=uniquekey("notes","ntkey");
	$date=date('Y-m-d');
	$qry="insert into notes(ntkey,sname,topic,sem,note,date,lid,type) values ('".$ntkey."','".$sname."','".$topic."','".$sem."','".$files['name']."','".$date."','".$lid."','".$type."')";
	$exe=mysql_query($qry);
	$d="uploads/".$ntkey;

		
		
		if($exe)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
}


function tr_notes_update($sname,$topic,$sem,$type,$files=NULL,$ntkey)
{
	date_default_timezone_set("Asia/Kolkata");
	
    // $lid=keytoid("login","lkey",$lkey);
	$ntid=keytoid("notes","ntkey",$ntkey);
	// $date=date('Y-m-d');
	$qry="update notes set sname='".$sname."',topic='".$topic."',sem='".$sem."',note='".$files['name']."',type='".$type."' where id='".$ntid."'";
	$exe=mysql_query($qry);
	$d="uploads/".$ntkey;

		if($exe)
		{
			// mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
}




function tr_all_notes_fetch()
{
$qry="select * from notes where type='Notes'";
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function notes_search($sname,$topic,$sem)
{
  $qry="select * from notes where sname='".$sname."' or topic='".$topic."' or sem='".$sem."' and type='Notes'";
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}

function tr_note_view($lkey)
{
	$lid=keytoid("login","lkey",$lkey);
$qry="select * from notes where lid='".$lid."' ";
// echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function delete_note($ntkey)
{
	$qry="delete from notes where ntkey='".$ntkey."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='tr_notes_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='tr_notes_view.php';</script>";
    }
}

function tr_note_edit_view($ntkey)
{
	// $lid=keytoid("login","lkey",$lkey);
$qry="select * from notes where ntkey='".$ntkey."'";
// echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function tr_leave_apply($title,$report,$lkey)
{
	date_default_timezone_set("Asia/Kolkata");
	$lid=keytoid("login","lkey",$lkey);
	$lekey=uniquekey("leaves","lekey");
	$date=date('Y-m-d');
	$qry="insert into leaves(title,report,date,lekey,lid)values('".$title."','".$report."','".$date."','".$lekey."','".$lid."')";
	//echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Leave submission successfull')</script>";
		
}
	else
		echo"<script>alert('Leave submission unsuccessful')</script>";

}



function tr_leave_apply_view($lkey)
{
	$lid=keytoid("login","lkey",$lkey);
$qry="select * from leaves inner join trreg on leaves.lid=trreg.lid where leaves.lid='".$lid."'";
 // echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}
function tr_leave_apply_delete($lekey)
{
	$qry="delete  from leaves where lekey='".$lekey."'";
	 // echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='tr_leave_apply_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='tr_leave_apply_view.php';</script>";
    }
}



function tr_leave_apply_edit_view($lekey)
{
	
$qry="select * from leaves where lekey='".$lekey."'";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}



function tr_leave_apply_view_edit_submit($title,$report,$lekey)
{
	$qry="update leaves set title='".$title."',report='".$report."' where lekey='".$lekey."'";
	
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('leave submitted');window.location.href='tr_leave_apply_view.php';</script>";
		
}
	else
		echo"<script>alert('leave not submitted');window.location.href='tr_leave_apply_view.php';</script>";

}




// --------------------------------teacher module end-------------------------------------------------------------------------

// ---------------------------------------------Login start-----------------------------------------------------------
	
	function login($name,$password) //login.php
{
	$enc=md5($password);
	$qry="select lkey,astus,utyp,gtyp from login where user='".$name."' and password='".$enc."'";
	// echo$qry;exit; 
    $exe=mysql_query($qry);
    $lkey=null;
    $astus=null;
    $utyp=null;
    $astus=null;
    $c=0;
    while($rr=mysql_fetch_array($exe))
    {
    	$lkey=$rr['lkey'];
    	$astus=$rr['astus'];
    	$utyp=$rr['utyp'];
    	$c=$c+1;
    }
if($c>0)
    {
    	if($astus==0)
{
    	setcookie("lkey",$lkey);
    	setcookie("logined",1);
    	if($utyp==0)
    	{
    		header("location:admin.php");
    	}
    	elseif ($utyp==1)
    	{
    		header("location:hod_main_header.php");
    	}
    	elseif($utyp==2)
    	{
    		header("location:librarian.php");
    	}
    	 elseif($utyp==3){
    	header("location:teacher_main_header.php");
    }
     elseif($utyp==4){
     	
    	header("location:student_main_header.php");
    }
    }

elseif($astus==1)
   {
   	echo"<script> alert('Your Registration has been rejected by admin please contact college HOD !')</script>";
   }

   else
   {
   	echo"<script> alert('User approval pending')</script>";
   }
}
   else
   {
   	echo"<script> alert('Invalid user')</script>";
   }


}



// ---------------------------------------------Login end -----------------------------------------------------------





// -------------------------------------librarian module start-----------------------------------------------
function add_books($bnam,$files=array(),$ban,$subject,$sem)
{
	
	$num=1;
	$bkey=uniquekey("add_book","bkey");
	$qry1="insert into add_book(bkey,bnam,ban,subject,sem) values ('".$bkey."','".$bnam."','".$ban."','".$subject."','".$sem."')";
	$exe1=mysql_query($qry1);
	//uploads
	
	//book uploading file ,image




		if($exe1)
		{
			$d="uploads/".$bkey;
			mkdir($d);
				foreach ($files as $a)
	{
		
		$qry="update add_book set img$num='".$a['name']."' where bkey='".$bkey."'";
		$exe=mysql_query($qry);
		$num=$num+1;
		$k=move_uploaded_file($a['tmp_name'], $d."/".$a['name']);
	

	}
	if($k==2)
		echo"book added";
			
			
		}

		else
		{
			echo"<script>alert('insertion error')</script>";
		}
	}
	
function all_student_info1()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM stdreg inner join login on login.id=stdreg.lid";
	// echo $qry;exit;
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

function all_student_info($sem)//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM stdreg inner join login on login.id=stdreg.lid where sem='$sem'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}



function all_teacher_info()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM trreg inner join login on login.id=trreg.lid ";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

function delete_std($std_key)
{
	$qry="delete from stdreg where std_key='".$std_key."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='admin_newly_enrolled_std.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='admin_newly_enrolled_std.php';</script>";
    }
}

function std_approve($std_key,$sem) 
{
	$idlogin=keytoid("login","lkey",$std_key);

	$qry="update login set astus='0' where id='".$idlogin."'";
	
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='admin_student_view.php?sem=$sem';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='admin_student_view.php?sem=$sem';</script>";
	}

}


function std_reject($std_key,$sem)
{
$idlogin=keytoid("login","lkey",$std_key);
	$qry="update login set astus='1' where id='".$idlogin."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='admin_student_view.php?sem=$sem';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='admin_student_view.php?sem=$sem';</script>";
	}
}

function new_teacher_info()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM trreg where lid='0' ";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

function delete_tr($tr_key)
{
	$qry="delete from trreg where tr_key='".$tr_key."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='admin_newly_enrolled_tr.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='admin_newly_enrolled_tr.php';</script>";
    }
}

function tr_approve($tr_key,$sem) 
{
	$idlogin=keytoid("login","lkey",$tr_key);
	$qry="update login set astus='0' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='admin_teachers_view.php?sem=$sem';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='admin_teachers_view.php?sem=$sem';</script>";
	}

}


function tr_reject($tr_key,$sem) 
{
$idlogin=keytoid("login","lkey",$tr_key);
	$qry="update login set astus='1' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='admin_teachers_view.php?sem=$sem';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='admin_teachers_view.php?sem=$sem';</script>";
	}
}



function issued_books()
{
	$qry="select * from add_book";
	$exe=mysql_query($qry);
	$arr=array();
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;

}


function delete_book($bkey)
{
	$qry="delete from add_book where bkey='".$bkey."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='issued_books.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='issued_books.php';</script>";
    }
}


function delete_questionpaper($qkey)
{
	$qry="delete from question_paper where qkey='".$qkey."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='issued_question_paper.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='issued_question_paper.php';</script>";
    }
}


function add_question_paper($subject,$year,$files=NULL)
{
	
	
	$qkey=uniquekey("question_paper","qkey");
	$qry="insert into question_paper(qkey,subject,year,img1) values ('".$qkey."','".$subject."','".$year."','".$files['name']."')";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	$d="uploads/".$qkey;

		$exe=mysql_query($qry);
		
		if($exe)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
}
	


function issued_question_paper()
{
	$qry="select * from question_paper";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;

}

function librarian_student_request_book_view()
{
	$qry="select * from req_book inner join login on login.id=req_book.lid inner join stdreg on stdreg.lid=login.id where login.utyp='4'";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function librarian_teacher_request_book_view()
{
	$qry="select * from req_book inner join login on login.id=req_book.lid inner join trreg on trreg.lid=login.id where login.utyp='3'";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function notice_upload($title,$notice)
{
	date_default_timezone_set("Asia/Kolkata");
	$nokey=uniquekey("notice","nokey");
	$date=date('Y-m-d');
	$qry="insert into notice(title,notice,date,nokey) values('".$title."','".$notice."','".$date."','".$nokey."')";
	// echo $qry;exit();
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Notice submission successfull')</script>";
		
}
	else
		echo"<script>alert('Notice submission unsuccessful')</script>";

}

function upload_notice_view()//incmplt
{
	$qry="select * from notice ";
	
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function upload_notice_edit_view($nokey)//incmplt
{
	$qry="select * from notice where nokey='".$nokey."'";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function notice_edit_upload($title,$notice,$nokey)
{
	date_default_timezone_set("Asia/Kolkata");
	
	$date=date('Y-m-d');
	$qry="update notice set title='".$title."',notice='".$notice."',date='".$date."' where nokey='".$nokey."' ";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	if($exe)

{
		
		header("location:notice_edit.php?nokey=$nokey");
		echo"<script>alert('Notice submission successfull')</script>";
}
	else
		echo"<script>alert('Notice submission unsuccessful')</script>";

}

function delete_notice($nokey)
{
	$qry="delete from notice where nokey='".$nokey."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='upload_notice_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='upload_notice_view.php';</script>";
    }
}
// -------------------------------------librarian module end----------------------------------------------

// ---------------------------------------Library common to student teacher-------------------------------------
function library()
{
	$qry="select * from add_book LIMIT 8";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;

}

function question_bank()
{
	$qry="select * from question_paper";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;

}

function library_home_back($lkey)
{

	$qry="select utyp from login where lkey='".$lkey."'";

		$exe=mysql_query($qry);
		$utyp=null;
		while($rr=mysql_fetch_array($exe))
		{
			$utyp=$rr['utyp'];
		}
	if($exe)
	{
		if($utyp=='1')
    {
     	
    	header("location:hod_main_header.php");
    }
	else if($utyp=='2')
	{
    	header("location:librarian.php");
    }
     else if($utyp=='3')
    {
    	header("location:teacher_main_header.php");
    }
     else if($utyp=='4')
    {
     	
    	header("location:student_main_header.php");
    }
     


}

}



function book_fetch($subject)
{
$qry="select * from add_book where subject='".$subject."'";
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function booksearch($bnam)
{
  $qry="select * from add_book where bnam='".$bnam."'";
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
// ---------------------------------------Library common to student teacher end-------------------------------------

// ---------------------------------------------Admin Module start-------------------------------------------------

function admin_news($title,$report)//admin_news.php
{
	date_default_timezone_set("Asia/Kolkata");
	$nkey=uniquekey("news","nkey");
	$date=date('Y-m-d');
	$qry="insert into news(title,report,date,nkey) values('".$title."','".$report."','".$date."','".$nkey."')";
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('News submission successfull')</script>";
		
}
	else
		echo"<script>alert('News submission unsuccessful')</script>";

}


function admin_news_view() //admin_news_view.php
{
	
	$qry="select * from news ORDER BY date DESC";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function admin_news_edit($title,$report,$key) //admin_news_edit.php
{
	$id=keytoid("news"," nkey",$key);
	$qry="update news set title='".$title."',report='".$report."' where id='".$id."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
    if($exe){
    	echo"<script>alert('Updation successful');window.location.href='admin_news_view.php';</script>";
    }
    else
    {
    	echo"<script>alert('Deletion successful');window.location.href='admin_news_view.php';</script>";
    }

}

function admin_news_edit_view($nkey)//admin_news_edit.php
{
	// echo$key;exit;
	
   $id=keytoid("news","nkey",$nkey);
   $qry="select * from news where id='".$id."'";
   // echo$qry;exit;
   $exe=mysql_query($qry);
   $arr=array();
   $arr=null;
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;

}

function admin_news_delete($key) //admin_news_delete.php
{
	$id=keytoid("news","nkey",$key);
	$qry="delete from news where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='admin_news_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='admin_news_view.php';</script>";
    }
} 



function add_student($adno,$name1,$name2,$dep,$doj,$grad,$spno,$files=NULL,$adharno,$address,$pin,$sex,$dob,$email)
{

	date_default_timezone_set("Asia/Kolkata");

	$qry="select std_key from stdreg where adno='".$adno."' AND spno='".$spno."'";
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['std_key'];
		}

		if($arr==null)
		{


	$std_key=uniquekey("stdreg","std_key");

	$month=explode('-',$doj);

	
	$qry1="insert into stdreg (adno,std_key,name1,name2,dep,doj,grad,spno,photo,sem,month,aadhar,address,pin,sex,dob,email) values('".$adno."','".$std_key."','".$name1."','".$name2."','".$dep."','".$doj."','".$grad."','".$spno."','".$files['name']."','1','".$month[1]."','".$adharno."','".$address."','".$pin."','".$sex."','".$dob."','".$email."')";



// echo$qry1;exit;
	$d="uploads/".$std_key;


		$exe1=mysql_query($qry1);
		
		if($exe1)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}


	
}
else{
echo"<script>alert('Student already exsit')</script>";
}
}


function add_teacher($trid,$name1,$name2,$address,$pin,$dob,$sex,$quan,$tpno,$adharno,$files=NULL,$lkey,$doj,$email)
{
	
$lid=keytoid("login","lkey",$lkey);
	$qry="select tr_key from trreg where trid='".$trid."' AND tpno='".$tpno."'";
	// echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['tr_key'];
		}

		if($arr==null)
		{


	$tr_key=uniquekey("trreg","tr_key");
	
	$qry1="insert into trreg (trid,tr_key,name1,name2,address,pin,dob,sex,quan,tpno,adharno,photo,doj,email) values('".$trid."','".$tr_key."','".$name1."','".$name2."','".$address."','".$pin."','".$dob."','".$sex."','".$quan."','".$tpno."','".$adharno."','".$files['name']."','".$doj."','".$email."')";
  
	$d="uploads/".$tr_key;
		$exe1=mysql_query($qry1);
		$qry2="update login set astus='1' where login.id='".$lkey."'";
		$exe2=mysql_query($qry2);
		if($exe1)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}


	
}
else{
echo"<script>alert('Teacher already exsit')</script>";
}

}



// ---------------------------------------------Admin module end-------------------------------------------------------
	
// --------------------------------------------------HOD module-------------------------------




function hod_news($title,$report)//admin_news.php
{
	date_default_timezone_set("Asia/Kolkata");
	$nkey=uniquekey("news","nkey");
	$date=date('Y-m-d');
	$qry="insert into news(title,report,date,nkey) values('".$title."','".$report."','".$date."','".$nkey."')";
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('News submission successfull')</script>";
		
}
	else
		echo"<script>alert('News submission unsuccessful')</script>";

}

function hod_news_view() 
{
	
	$qry="select * from news ORDER BY date DESC";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function hod_news_edit($title,$report,$key) 
{
	$id=keytoid("news"," nkey",$key);
	$qry="update news set title='".$title."',report='".$report."' where id='".$id."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
    if($exe){
		echo"<script>alert('Submission successful');window.location.href='hod_news_edit.php?key=$key';</script>";
	}
	else
    {
			echo"<script>alert('Submission unsuccessful');window.location.href='hod_news_edit.php?key=$key';</script>";
    }

}

function hod_news_edit_view($nkey)
{
	// echo$key;exit;
	
   $id=keytoid("news","nkey",$nkey);
   $qry="select * from news where id='".$id."'";
   // echo$qry;exit;
   $exe=mysql_query($qry);
   $arr=array();
   $arr=null;
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;

}

function hod_news_delete($key) //admin_news_delete.php
{
	$id=keytoid("news","nkey",$key);
	$qry="delete from news where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='hod_news_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='hod_news_view.php';</script>";
    }
} 






function hod_all_student_info($sem)//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM stdreg inner join login on login.id=stdreg.lid where sem='".$sem."'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}

	return $arr;


}



function hod_all_teacher_info()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM trreg inner join login on login.id=trreg.lid ";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

function hod_std_delete($std_key,$sem)
{
	$qry="delete from stdreg where std_key='".$std_key."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
    }
}

function hod_std_approve($std_key,$sem) 
{
	$idlogin=keytoid("login","lkey",$std_key);

	$qry="update login set astus='0' where id='".$idlogin."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);

	$qry2="update stdreg set sspd=null where lid='".$idlogin."'";
	$exe2=mysql_query($qry2);
	if($exe&&$exe2)
	{
		echo"<script>alert('Approval succesful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
	}

}


function hod_std_reject($std_key,$sem)
{
$idlogin=keytoid("login","lkey",$std_key);
	$qry="update login set astus='1' where id='".$idlogin."'";
	
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
	}
}


function hod_std_search($name1)
{
  $qry="select * from stdreg where name1='".$name1."'";
  // echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}




function hod_new_teacher_info()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM trreg where lid='0' ";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

function hod_delete_tr($tr_key)
{
	$qry="delete from trreg where tr_key='".$tr_key."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='hod_teachers_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='hod_teachers_view.php';</script>";
    }
}

function hod_tr_approve($tr_key) //pension_approve.php
{
	$idlogin=keytoid("login","lkey",$tr_key);
	$qry="update login set astus='0' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='hod_teachers_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='hod_teachers_view.php';</script>";
	}

}


function hod_tr_reject($tr_key) //pension_reject.php
{
$idlogin=keytoid("login","lkey",$tr_key);
	$qry="update login set astus='1' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='hod_teachers_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='hod_teachers_view.php';</script>";
	}
}

function timetable_upload($day,$s1,$s2,$s3,$s4,$s5,$s6,$sem,$year)
{
	$tkey=uniquekey("timetable","tkey");
	$qry="insert into timetable(tkey,day,s1,s2,s3,s4,s5,s6,sem,year) values('".$tkey."','".$day."','".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$sem."','".$year."')";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('timetable submitted');window.location.href='timetable_upload.php';</script>";
	}
}

function hod_timetable_view1() 
{
	
	$qry="select distinct year,sem from timetable ";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function hod_timetable_view2($year,$sem) 
{
	
	$qry="select * from timetable where year='".$year."' and sem='".$sem."' ";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}
function delete_timetable($year,$sem)
{
	$qry="delete from timetable where year='".$year."' and sem='".$sem."' ";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
	echo"<script>alert('Deletion successful');window.location.href='hod_timetable_view1.php?year=$year&&sem=$sem';</script>";
	}
	else
    {
	echo"<script>alert('Deletion unsuccessful');window.location.href='hod_timetable_view1.php?year=$year&&sem=$sem';</script>";
    }
}


function hod_timetable_edit_view($tkey)
{
	$qry="select * from timetable where tkey='".$tkey."'";
	$exe=mysql_query($qry);
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function timetable_edit($tkey,$s1,$s2,$s3,$s4,$s5,$s6,$sem,$year)
{
	
	// $qry=" into timetable(day,s1,s2,s3,ups4,s5,s6,sem,year) values('".$tkey."','".$day."','".$s1."','".$s2."','".$s3."','".$s4."','".$s5."','".$s6."','".$sem."','".$year."')";

	$qry="update timetable  set s1='".$s1."',s2='".$s2."',s3='".$s3."',s4='".$s4."',s5='".$s5."',s6='".$s6."',year='".$year."' where tkey='".$tkey."' ";
// echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('timetable edit succesful');window.location.href='hod_timetable_edit.php?tkey=$tkey';</script>";
	}
	else{
		echo"<script>alert('timetable edit unsuccesful');window.location.href='hod_timetable_edit.php?tkey=$tkey';</script>";
	}
}


function hod_tr_leave_apply_view()
{
$qry="select * from leaves inner join trreg on trreg.lid=leaves.lid";
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}
function hod_tr_leave_apply_approve($lekey) 
{
	$idleaves=keytoid("leaves","lekey",$lekey);

	$qry="update leaves set lstatus='1' where lekey='".$lekey."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='hod_tr_leave_apply_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='hod_tr_leave_apply_view.php';</script>";
	}

}


function hod_tr_leave_apply_reject($lekey) 
{
	$idleaves=keytoid("leaves","lekey",$lekey);

	$qry="update leaves set lstatus='2' where lekey='".$lekey."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='hod_tr_leave_apply_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='hod_tr_leave_apply_view.php';</script>";
	}

}

function hod_std_leave_apply_view($sem)
{
$qry="select * from leaves inner join stdreg on stdreg.lid=leaves.lid and leaves.sem='$sem'";
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function hod_std_leave_apply_approve($lekey,$sem) 
{
	$idleaves=keytoid("leaves","lekey",$lekey);

	$qry="update leaves set lstatus='1' where lekey='".$lekey."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='hod_std_leave_view.php?sem=$sem';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='hod_std_leave_view.php?sem=$sem';</script>";
	}

}

function hod_std_leave_apply_reject($lekey,$sem) 
{
	$idleaves=keytoid("leaves","lekey",$lekey);

	$qry="update leaves set lstatus='2' where lekey='".$lekey."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='hod_std_leave_view.php?sem=$sem';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='hod_std_leave_view.php?sem=$sem';</script>";
	}

}
// ------------------------------------hod module end--------------------------------------------
// ------------------------------------payment-----------------------------------------------------
function feesemcheck($asem,$std_key)
{
	$qry="select sem,fsem from stdreg where std_key='".$std_key."'";
	$exe=mysql_query($qry);
	$sem=null;
		while($rr=mysql_fetch_array($exe))
		{
			$sem=$rr['sem'];
			$fsem=$rr['fsem'];
		}

}

function feeunlockbutton($stdkey)
{
	$qry="select * from stdreg where std_key='".$stdkey."'";
	$exe=mysql_query($qry);
	 $arr=array();
   
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;
}


function feesupload($fees,$sem,$year)
{
$fekey=uniquekey("fees","fekey");
$cdate=date("Y-m-d");
	
	$qry="insert into fees(fee,sem,year,fekey,cdate) values('".$fees."','".$sem."','".$year."','".$fekey."','".$cdate."')";
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Fees uploaded');window.location.href='fees_upload.php';</script>";
		
}
	else
		echo"<script>alert('Fees upload unsuccessful');window.location.href='fees_upload.php';</script>";;

}

function fees_upload_edit_view($fekey)
{
	
   $id=keytoid("fees","fekey",$fekey);
   $qry="select * from fees where id='".$id."'";
   // echo$qry;exit;
   $exe=mysql_query($qry);
   $arr=array();
   $arr=null;
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;

}

function fees_upload_edit_submit($fekey,$fee,$sem,$year) //admin_news_edit.php
{
	$id=keytoid("fees","fekey",$fekey);
	$qry="update fees set fee='".$fee."',sem='".$sem."',year='".$year."' where id='".$id."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
    if($exe){
    	echo"<script>alert('Fees updation successful');window.location.href='fees_upload_view.php?fekey=$fekey';</script>";
    }
    else
    {
    	echo"<script>alert('Fees updation unsuccessful');window.location.href='fees_upload_view.php?fekey=$fekey';</script>";
    }

}

function fees_upload_view()
{
$qry="select * from fees";
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function fees_delete($fekey) //admin_news_delete.php
{
	$id=keytoid("fees","fekey",$fekey);
	$qry="delete from fees where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='fees_upload_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='fees_upload_view.php';</script>";
    }
} 

function fetch_sem_fee($stdkey,$asem)
{
// $qry="select * from fees inner join stdreg on stdreg.sem=fees.sem where stdreg.std_key='".$stdkey."'";
// echo$qry;exit;
	$qry="select * from fees where sem='".$asem."'";
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}


function payment($name,$cardno,$cvv,$expirydate,$fee,$std_key,$asem,$lkey)//payment.php

//pakey->payment key, paykey from 

	{
// echo"hi";exit;

		$qry1="select tamount from bank where cvv='".$cvv."' and cardno='".$cardno."'";
		// echo$qry1;exit;
		$exe1=mysql_query($qry1);
		$bt=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$bt=$rr['tamount'];//total amount from table bank
		}
		// echo$bt;exit;

		if ($bt>=$fee) {
			$bt1=$bt-$fee;
		
// echo $bt1;
//student loginid
	$idlogin=keytoid("login","lkey",$lkey);
	date_default_timezone_set("Asia/Kolkata");
	$currentdate=date('Y-m-d');


// echo"$idlogin";exit;

//select student contact no. for message to student phone
	
	// echo$pid;exit;
	$stdid=keytoid("stdreg","std_key",$std_key);
	$qryspno="select spno from stdreg where id='".$stdid."'";
	// echo$qryspno;exit;
	$exespno=mysql_query($qryspno);
	$spno=null;
		while($rr=mysql_fetch_array($exespno))
		{
			$spno=$rr['spno']; //student contact no.
		}

		//transaction credition
	$paykey=uniquekey("payment","paykey");
	$qry="insert into payment(paykey,name,cardno,cvv,expirydate,currentdate,amount,lid,sem,contactno)values('".$paykey."','".$name."','".$cardno."','".$cvv."','".$expirydate."','".$currentdate."','".$fee."','".$idlogin."','".$asem."','".$spno."')";

	// echo$qry;exit;
	 $exe=mysql_query($qry);

	 //stdreg updation
	 // $paid=keytoid("pensionapply","pakey",$pakey);
	 $qryfsem="update stdreg set fsem='".$asem."' where id='".$stdid."'";
	 $exefsem=mysql_query($qryfsem);
// echo$qryfsem;exit;




//AMOUNT DEDUCTION FROM STUDENT BANK ACCOUNT
	$qrybup="update bank set tamount='".$bt1."' where cardno='".$cardno."' and cvv='".$cvv."' ";
	$exebup=mysql_query($qrybup);

// echo$qrybup;exit;
// ------------------------------------ADMIN-------------------------------------------

$ano=9876543210;
//select totalamount of admin from table bank
	$qrytamount="select tamount from bank where contactno='".$ano."'";
	$exetamount=mysql_query($qrytamount);
	$admintamount=null;
		while($rr=mysql_fetch_array($exetamount))
		{
			$admintamount=$rr['tamount']; //pension contact no.
		}
// echo$qrytamount;exit;


//admin total amount after credition
	$bt2=$admintamount+$fee;

//admin amount ADDITION credition
	$qryadmincredit="update bank set tamount='".$bt2."' where contactno='".$ano."'";
	$exeadmincredit=mysql_query($qryadmincredit);



		if($exetamount&&$exeadmincredit&&$exespno&&$exe1)
		{

				echo"<script>alert('Payment successful');window.location.href='std_fee_pay.php';</script>";
		}
		else
			echo "<script>alert('Payment not successful')</script>";

	}
//end
}

// -------------------------------------payment end--------------------------------------------------------


// -------------------------------------------chat start-----------------------------------------------------
function stdkeytolid($std_key)
{
	$qry="select lid from stdreg where std_key='".$std_key."'";
	$exe=mysql_query($qry);
	$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['lid'];
		}
		return $arr;
}

function trkeytolid($tr_key)
{
	$qry="select lid from trreg where tr_key='".$tr_key."'";
	$exe=mysql_query($qry);
	$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['lid'];
		}
		return $arr;
}

						// ------------------teacher--------------------



function tr_student_msg_send($slid,$msg,$rlid)//
{
	$ckey=uniquekey("chat","ckey");
	date_default_timezone_set("Asia/Kolkata");
	$currtime=date('h:i:sa');
		$time1= date('H:i', strtotime($currtime));
	$currdate=date('Y-m-d');
	$qry="insert into chat(ckey,msg,slid,rlid,date,time)values('".$ckey."','".$msg."','".$slid."','".$rlid."','".$currdate."','".$time1."')";
	// echo$qry;exit;
	$exe=mysql_query($qry);

}



					// ---------teacher end----------------



				// -------------------hod chat start--------------

function hod_tr_chat1()
{
  $qry="select * from trreg inner join login on login.id=trreg.lid order by trreg.name1,trreg.name2 asc";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}



function hod_teacher_msg_send($rlid,$msg,$slid)
{
	$ckey=uniquekey("chat","ckey");
	date_default_timezone_set("Asia/Kolkata");
	$currtime=date('h:i:sa');
		$time1= date('H:i', strtotime($currtime));
	$currdate=date('Y-m-d');
	$qry="insert into chat(ckey,msg,rlid,slid,date,time)values('".$ckey."','".$msg."','".$rlid."','46','".$currdate."','".$time1."')";
	// echo$qry;exit;
	$exe=mysql_query($qry);

}








// --------------------

function hod_std_chat1($sem)
{
  $qry="select * from stdreg inner join login on login.id=stdreg.lid where sem='".$sem."' order by stdreg.name1,stdreg.name2 asc";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function tr_hod_msg_send($slid,$msg,$rlid)//
{
	$ckey=uniquekey("chat","ckey");
	date_default_timezone_set("Asia/Kolkata");
	$currtime=date('h:i:sa');
	$time1= date('H:i', strtotime($currtime));
	$currdate=date('Y-m-d');
	$qry="insert into chat(ckey,msg,slid,rlid,date,time)values('".$ckey."','".$msg."','".$slid."','46','".$currdate."','".$time1."')";
	// echo$qry;exit;
	$exe=mysql_query($qry);
}






//--------------hod - std-chat
 				// ----------------------hod chat end-------------
function hod_std_recive_msg_fetch($slid,$rlid)
{
	//receiver is hod is $slid is 46
	// echo $slid;exit;
	//to fetch photo,name of student
	$qry2="select * from chat inner join stdreg on stdreg.lid=chat.slid where chat.rlid='46' and chat.slid='".$rlid."' order by date and time desc";
	// echo$qry2;exit;
	$exe2=mysql_query($qry2);
	$arr2=array();
	while($rr=mysql_fetch_array($exe2))
	{
		$arr2[]=$rr;
	}
	return $arr2;
}

function hod_std_send_msg_fetch($slid,$rlid)
{
	$qry="select * from chat where chat.slid='46' and rlid='".$rlid."' order by date and time desc";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;

}

// ------------------------------------------------chat end---------------------------------------------------------


function notice_view()//incmplt
{
	$qry="select * from notice ";
	
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}
// -----------------------------------Attendance-------------------------------------------------




function subject_select($sem)
{

$date=date('Y-m-d');
$day=date('l',strtotime($date));
$qry="select * from timetable where day='".$day."' and sem='".$sem."'";
// echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	
}

function attendance_subject_select($subject,$sem)
{
header("location:tr_std_attendance.php?sem=$sem&&subject=$subject");
}





function present($sem,$subject,$lkey,$arr3=null)
{

//subject select
date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	$time=date('H:i:s');
	$time2=explode(':',$time);
	$time3=$time2[0]+1;
	$time4=$time3.':'.$time2[1].':'.$time2[2];
	$time5=strtotime($time);
		$akey=uniquekey("attendance","akey");
	$tlid=keytoid("login","lkey",$lkey);
	//subject select


	// echo strtotime("9:30:00");


					if($time5>=strtotime("9:30:00") AND $time5<=strtotime("10:29:59"))
				{
					$sub="s1";
				}
					elseif($time5>=strtotime("10:30:00") AND $time5<=strtotime("11:29:59"))
				{
					$sub="s2";
				}
						elseif($time5>=strtotime("11:30:00") AND $time5<=strtotime("12:29:59"))
				{
					$sub="s3";
				}
					elseif($time5>=strtotime("12:30:00") AND $time5<=strtotime("13:29:59"))
				{
					$sub="end";
					// echo"p2";
				}
					elseif($time5>=strtotime("13:30:00") AND $time5<=strtotime("14:29:59"))
				{
					$sub="s4";
				}
					elseif($time5>=strtotime("14:30:00") AND $time5<=strtotime("15:29:59"))
				{
					$sub="s5";
				}
					elseif($time5>=strtotime("15:29:59") AND $time5<=strtotime("16:14:59"))
				{
					$sub="s6";
				}
				else
				{
					$sub="end";
					
				}
	//subject select end
	foreach($arr3 as $stdkey)  
  {  
  	// print_r($arr3);exit;
  	$stdkey2=explode('-',$stdkey);
		$stdkey3=$stdkey2[0];
		$pre=$stdkey2[1];
  	$id=keytoid("stdreg","std_key",$stdkey3);
  	$qryy="select lid from stdreg inner join login on login.id=stdreg.lid where stdreg.id='".$id."'";
  	$exeyy=mysql_query($qryy);
  	$slid=null;
  	while($rr=mysql_fetch_array($exeyy))
  	{
  		$slid=$rr['lid'];
  	}

	// $qry2="select attendance.slid,$sub from attendance inner join stdreg on attendance.slid=stdreg.lid inner join login on login.id=stdreg.lid where attendance.date='".$date."' and stdreg.sem='".$sem."' and attendance.time<='".$time4."' and attendance.slid='".$slid."'";

		$qry2="select attendance.slid,$sub from attendance inner join stdreg on attendance.slid=stdreg.lid inner join login on login.id=stdreg.lid where attendance.date='".$date."' and stdreg.sem='".$sem."' and attendance.slid='".$slid."' ";
	// echo$qry2;exit;
 $exe2=mysql_query($qry2);
  $sid=null;
  $present1=null;
		while($rr=mysql_fetch_array($exe2))
		{
			$sid=$rr['slid'];
			$present1=$rr[$sub];
		}
		

	if($sid==null)
	{

	$qry="insert into attendance(akey,".$sub.",tlid,time,date,slid) values('".$akey."','".$pre."','".$tlid."','".$time."','".$date."','".$slid."')";
				// echo$qry;exit;
				$exe=mysql_query($qry);
				// $sid=null;
}
else
{
	$exe=false;
    $qry3="update attendance set ".$sub."='".$pre."',time='".$time."',tlid='".$tlid."' where slid='".$slid."' and date='".$date."' ";
		$exe3=mysql_query($qry3);

}
}
				if($exe OR $exe3)
				{
				$qry22="select date from classtable where date='".$date."' and sem='".$sem."'";
				$exe22=mysql_query($qry22);

				 $date1=null;
		while($rr=mysql_fetch_array($exe22))
		{
			$date1=$rr['date'];
		}
		if($date1==null)
		{
				$ctkey=uniquekey("classtable","ctkey");
				$qry23="insert into classtable(".$sub.",ctkey,date,sem)values('".$subject."','".$ctkey."','".$date."','".$sem."')";
				// echo$qry23;exit;
				$exe23=mysql_query($qry23);
		}
		else
{
    $qry33="update classtable set ".$sub."='".$subject."' where date='".$date."' and sem='".$sem."'";
		$exe33=mysql_query($qry33);
}
}
}





function fullday($sem)
{	
if($sem!=6) 
{

	$qry1="update attendance inner join stdreg on stdreg.lid = attendance.slid set attendance.fullday = '1' where attendance.s1 = '1' and attendance.s2 = '1' and attendance.s3 = '1' and attendance.s4 = '1' and attendance.s5 = '1' and attendance.s6 = '1' and stdreg.sem <> '6'";
  		$exe1=mysql_query($qry1);

}
else 
{
	$qry2="update attendance inner join stdreg on stdreg.lid = attendance.slid set attendance.fullday = '1' where attendance.s1 = '1' and attendance.s2 = '1' and attendance.s3 = '1' and attendance.s4 = '1' and attendance.s5 = '1' and stdreg.sem = '6'";
  		$exe2=mysql_query($qry2);

}
}


function hod_fullday($sem,$sub)
{

		date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	if($sem!=6)
	{
	for($i=$sub+1;$i<6;$i++)
	{
		$sb="s"."$i";
	$qry="update attendance inner join stdreg on stdreg.lid = attendance.slid set attendance.".$sb."='1' where stdreg.sem='".$sem."' and attendance.date='".$date."'";
	$exe1=mysql_query($qry);
}
}
else{
		for($i=$sub+1;$i<5;$i++)
	{
		$sb="s"."$i";
	$qry2="update attendance inner join stdreg on stdreg.lid = attendance.slid set attendance.".$sb."='1' where stdreg.sem='".$sem."' and attendance.date='".$date."'";
	$exe2=mysql_query($qry2);
}
}
}


function tr_std_attendance_view($date,$sem,$lkey)
{

	$tlid=keytoid("login","lkey",$lkey);
  $qry="select * from attendance inner join stdreg on stdreg.lid=attendance.slid where date='".$date."' and sem='".$sem."' and tlid='".$tlid."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}


function hod_std_attendance_view($date,$sem)
{

  $qry="select * from attendance inner join stdreg on stdreg.lid=attendance.slid where date='".$date."' and sem='".$sem."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}




// --------------------------------------Attendance end------------------------------------------
function fetch_doj()
{

$qry="select distinct doj from stdreg";

  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	
}

function fee_paid_fetch($name1,$sem)
{

  $qry="select * from stdreg where sem='".$sem."' and name1='".$name1."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}
function fee_paid_fetch_view($sem)
{

  $qry="select * from stdreg where sem='".$sem."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}




//-------------------------------ONLINE CLASS---------------------


function tr_std_class($lkey,$sem,$sub,$topic,$rsh)
{


$lid=keytoid("login","lkey",$lkey);
$clkey=uniquekey("class","clkey");
date_default_timezone_set("Asia/Kolkata");
$time=date('h:i:sa');
$date=date("Y-m-d");
	
	$qry="insert into class(clkey,sem,sub,topic,date,time,lid,hash) values('".$clkey."','".$sem."','".$sub."','".$topic."','".$date."','".$time."','".$lid."','".$rsh."')";
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Submission successful');window.location.href='tr_std_class.php?sem=$sem';</script>";
		
}
	else
		echo"<script>alert('submmission unsuccessful');window.location.href='tr_std_class.php?sem=$sem';</script>";;

}


function select_class_hash($clkey)
{
$id=keytoid("class","clkey",$clkey);
$qry="select hash from class where id ='".$id."'";
// echo$qry;exit;
$exe=mysql_query($qry);
$hash=null;
while($rr=mysql_fetch_array($exe))
{
$hash=$rr['hash'];
}
return$hash;
}



function tr_std_class_fetch($sem,$lkey) //admin_news_view.php
{
	$lid=keytoid("login","lkey",$lkey);
	$qry="select * from class where sem='".$sem."' and lid='".$lid."' order by date desc , time desc ";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



function tr_std_class_edit($lkey,$sem,$sub,$url,$topic)
{


$lid=keytoid("login","lkey",$lkey);
$clkey=uniquekey("class","clkey");
date_default_timezone_set("Asia/Kolkata");
$time=date('h:i:sa');
$date=date("Y-m-d");
	
	$qry="update class set topic='".$topic."', sub='".$sub."',time='".$time."',date='".$date."' where lid='".$lid."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Submission successful');window.location.href='tr_std_class.php?sem=$sem';</script>";
		
}
	else
		echo"<script>alert('submmission unsuccessful');window.location.href='tr_std_class.php?sem=$sem';</script>";

}



function tr_std_class_edit_fetch($sem,$clkey) //admin_news_view.php
{
	// $lid=keytoid("login","lkey",$lkey);
	$qry="select * from class where clkey='".$clkey."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}


function std_notes_views($sem)
{
  // $lid=keytoid("login","lkey",$lkey);
$qry="select * from notes where sem='".$sem."' and type='Notes'";
// echo$qry;exit;
    $exe=mysql_query($qry);
    $arr=array();
  
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
}


// ----------------------------------------Gallery Start--------------------------------------------------------
function add_gallery($heading,$subject,$files=NULL)
{
	date_default_timezone_set("Asia/Kolkata");
	$gkey=uniquekey("gallery","gkey");
	$date=date('Y-m-d');
	$qry="insert into gallery(gkey,heading,subject,img1,date) values ('".$gkey."','".$heading."','".$subject."','".$files['name']."','".$date."')";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$d="uploads/".$gkey;

		
		
		if($exe)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
}


function gallery_view()
{
  // $lid=keytoid("login","lkey",$lkey);
$qry="select * from gallery";
// echo$qry;exit;
    $exe=mysql_query($qry);
    $arr=array();
  
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
}


function gallery_notice_view()
{
  // $lid=keytoid("login","lkey",$lkey);
$qry="select * from notice";
// echo$qry;exit;
    $exe=mysql_query($qry);
    $arr=array();
  
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
}

function gallery_edit_fetch($gkey)
{
  // $lid=keytoid("login","lkey",$lkey);
$qry="select * from gallery where gkey='".$gkey."'";
// echo$qry;exit;
    $exe=mysql_query($qry);
    $arr=array();
  
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
}

function gallery_delete($gkey)
{
  $qry="delete  from gallery where gkey='".$gkey."'";
	 // echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='view_gallery.php?';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='view_gallery.php?';</script>";
    }
}
// --------------------------------------------Gallery End------------------------------------------------------




//28-1-23
function hod_new_enrolled_std_info()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM stdreg where lid='0' ";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

//pta

function hod_pta_submit($batch,$date,$sem)
{

date_default_timezone_set("Asia/Kolkata");
$time=date('h:i:sa');
	$ptakey=uniquekey("pta","ptakey");
	$qry="insert into pta (ptakey,batch,date,sem,time) values('".$ptakey."','".$batch."','".$date."','".$sem."','".$time."')";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('pta submit successfull')</script>";
	}
else
{
	echo"<script>alert('pta submit unsuccessfull')</script>";
}
}

function hod_pta_fetch($sem)
{
	$qry="select * from pta where sem='".$sem."'";
	// echo$qry;exit;
		$exe=mysql_query($qry);
		$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



function hod_pta_edit($batch,$date,$ptakey,$sem)
{

date_default_timezone_set("Asia/Kolkata");
$time=date('h:i:sa');
	$qry="update pta set batch='".$batch."',date='".$date."' where ptakey='".$ptakey."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('pta updation successfull');window.location.href='hod_pta_submit.php?sem=$sem';</script>";

	}
else
{
	echo"<script>alert('pta updation unsuccessfull');window.location.href='hod_pta_submit.php?sem=$sem';</script>";
}
}

function hod_pta_delete($ptakey,$sem)
{
	$qry="delete from pta where ptakey='".$ptakey."'";
	$exe=mysql_query($qry);
	if($exe){
		
			echo"<script>alert('Deletion successfull');window.location.href='hod_pta_submit.php?sem=$sem';</script>";
	
	}
	else{
		echo"<script>alert('Deletion unsuccessfull');window.location.href='hod_pta_submit.php?sem=$sem';</script>";
	}
}



function std_pta_view($sem,$lkey)
{
	$lid=keytoid("login","lkey",$lkey);
	$qry1="select doj from stdreg where lid='".$lid."'";
	$exe1=mysql_query($qry1);
	$doj=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$doj=$rr['doj'];
		}
	$batch=date('Y',strtotime($doj));

	$qry2="select * from pta where sem='".$sem."' and batch='".$batch."'";
	// echo$qry2;exit;
	$exe2=mysql_query($qry2);
	$arr=array();
		while($rr=mysql_fetch_array($exe2))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function contact($desig,$name1,$name2,$email,$contact,$id,$subject,$message)
{
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	$cokey=uniquekey("contact","cokey");
	$qry="insert into contact (desig,cokey,name1,name2,email,contact,ido,subject,message,date) values('".$desig."','".$cokey."','".$name1."','".$name2."','".$email."','".$contact."','".$id."','".$subject."','".$message."','".$date."')";
	 // echo $qry; exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Submission successfull')</script>";
	}
else
{
	echo"<script>alert('Sub unsuccessfull')</script>";
}

}

function contact_view_std() 
{
	
	$qry="select * from contact where desig='Student' ORDER BY date DESC";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function contact_view_tr() 
{
	
	$qry="select * from contact where desig='Teacher' ORDER BY date DESC";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function contact_delete_tr($cokey)
{
  $qry="delete  from contact where cokey='".$cokey."'";
	 // echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='contact_view_tr.php?';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='contact_view_tr.php?';</script>";
    }
}

function contact_delete_std($cokey)
{
  $qry="delete  from contact where cokey='".$cokey."'";
	 // echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='contact_view_std.php?';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='contact_view_std.php?';</script>";
    }
}
// -----------------------------------------------------------------------------------------------

function add_addon($title,$details,$files=NULL,$sem)
{
	date_default_timezone_set("Asia/Kolkata");
	$akey=uniquekey("addon","akey");
	$date=date('Y-m-d');
	$qry="insert into addon(akey,course,details,img1,date,asem) values ('".$akey."','".$title."','".$details."','".$files['name']."','".$date."','$sem')";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$d="uploads/".$akey;

		
		
		if($exe)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
}

function view_addon($sem)
{
  // $lid=keytoid("login","lkey",$lkey);
$qry="select * from addon where asem='".$sem."'";
// echo$qry;exit;
    $exe=mysql_query($qry);
    $arr=array();
  
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
}

function addon_delete($key,$sem)
{
  $qry="delete  from addon where akey='".$key."'";
	 // echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='view_addon.php?sem=$sem';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='view_addon.php?sem=$sem';</script>";
    }
}

function std_addon_view($sem,$lkey)
{
  // $lid=keytoid("login","lkey",$lkey);
$qry="select * from stdreg inner join addon on stdreg.sem=addon.asem where asem='".$sem."'";
// echo$qry;exit;
    $exe=mysql_query($qry);
    $arr=array();
  
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }

    return $arr;
}

function addon_enroll($key,$lkey,$sem,$aid)
{
	// $aid->akey
	// echo$key,$aid;exit;
	
	$lid=keytoid("login","lkey",$lkey);
	$qry="update stdreg set addon='".$aid."' where lid='".$lid."' ";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	if($exe)
		header("location:student_home.php?sem=$sem");

}
// -----------------------------------online class--------------------------------------------
function tr_video_class($sem,$clkey,$url)
{

   
    $id=keytoid("class","clkey",$clkey);
    $qry="update class set url='".$url."' where id='".$id."'";
    $exe=mysql_query($qry);


}

function std_video_classes($lkey,$sem)
{	
	// date_default_timezone_set("Asia/Kolkata");
	$date=date("Y-m-d");
	$qry="select * from class where sem='".$sem."' ";
	$exe=mysql_query($qry);
	$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function std_class_view()
{
$qry="select * from notes where type='Video'";
// echo $qry; exit;
		$exe=mysql_query($qry);
		$arr=array();
	
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}


function hod_new_enrolled_tr_info()
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM trreg where lid='0' ";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

//19-2-23
//admin-------------------------------------->>
//edit details--fetch
function admin_new_enrolled_std_edit($std_key)
{
	$qry="SELECT * FROM stdreg where std_key='".$std_key."'";
	$exe=mysql_query($qry);

	$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

function admin_new_enrolled_tr_edit($tr_key)
{
	$qry="SELECT * FROM trreg where tr_key='".$tr_key."'";
	$exe=mysql_query($qry);

	$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}
//edit details fetch end
function admin_edit_newly_enrolled_std($adno,$name1,$name2,$dep,$doj,$grad,$spno,$files=NULL,$adharno,$address,$pin,$sex,$dob,$std_key)
{
	$id=keytoid("stdreg","std_key",$std_key);
$qry="update stdreg set adno='".$adno."', name1='".$name1."', name2='".$name2."', dep='".$dep."',doj='".$doj."', grad='".$grad."',spno='".$spno."',photo='".$files['name']."',aadhar='".$adharno."',address='".$address."',pin='".$pin."',sex='".$sex."',dob='".$dob."' where id='".$id."'";
// echo $qry;exit;
$exe=mysql_query($qry);
if($exe)
{
		echo"<script>alert('Edit successful');</script>";
}
else
{
	echo"<script>alert('Edit unsuccessful');</script>";
}

}

function admin_edit_newly_enrolled_tr($trid,$name1,$name2,$address,$pin,$dob,$sex,$quan,$tpno,$adharno,$files=NULL,$lkey,$doj,$tr_key)
{
	$id=keytoid("trreg","tr_key",$tr_key);
	$qry="update trreg set trid='".$trid."', name1='".$name1."',name2='".$name2."',address='".$address."',pin='".$pin."',dob='".$dob."',sex='".$sex."',quan='".$quan."',tpno='".$tpno."',adharno='".$adharno."',doj='".$doj."' where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
{
	echo"<script>alert('Edit successful');</script>";
}
else
{
	echo"<script>alert('Edit unsuccessful');</script>";
}

}

function gallery_edit($heading,$subject,$files=NULL,$gkey)
{
	date_default_timezone_set("Asia/Kolkata");
$id=keytoid("gallery","gkey",$gkey);
	$date=date('Y-m-d');
	$qry="update gallery set heading='".$heading."',subject='".$subject."',img1='".$files['name']."',date='".$date."' where id='".$id."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$d="uploads/".$gkey;

		
		
		if($exe)
		{

			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Updation successful')</script>";
	
		}

		else
		{
			echo"<script>alert('Updation unsuccessful')</script>";
		}
}


function contact_reply($lkey,$subject,$message,$email)
{
	$lid=keytoid("login","lkey",$lkey);
	date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d');

	// $qry="update contact set subject='".$subject."',message='".$message."',email='".$email."' where lid='".$lid."'";

	$qry="insert into contact(cokey,email,desig,subject,message,date)values('".$cokey."','".$email."','ADMIN','".$subject."','".$message."','".$date."')";

	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Reply submitted')</script>";
	}

	else
	{
		echo"<script>alert('Reply submission unsuccessful')</script>";
	}
	

}

function contact_reply_edit($lkey,$subject,$message,$email)
{
	$lid=keytoid("login","lkey",$lkey);

	$qry="update contact set subject='".$subject."',message='".$message."',email='".$email."' where lid='".$lid."'";

	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Reply submitted')</script>";
	}

	else
	{
		echo"<script>alert('Reply submission unsuccessful')</script>";
	}
	

}




function c_reply($key)
{
	$qry="select email from contact where cokey='".$key."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
	$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['email'];
		}
		return $arr;
}


// -----------------------------report-------------------------


function std_report_upload($title,$report,$sem,$lkey)
{
  date_default_timezone_set("Asia/Kolkata");
  $lid=keytoid("login","lkey",$lkey);
  $rkey=uniquekey("report","rkey");
  $date=date('Y-m-d');
  $qry="insert into report(title,report,date,rkey,lid,resem) values('".$title."','".$report."','".$date."','".$rkey."','".$lid."','".$sem."')";
  // echo $qry;exit();
  $exe=mysql_query($qry);
  if($exe)

{
    echo"<script>alert('Report submission successfull')</script>";
    
}
  else
  {
    echo"<script>alert('Report submission unsuccessful')</script>";
  }

}


function std_report_update($title,$report,$sem,$rkey)
{
	date_default_timezone_set("Asia/Kolkata");
	$rid=keytoid("report","rkey",$rkey);
	// $rkey=uniquekey("report","rkey");
	$date=date('Y-m-d');

	$qry="update report set title='".$title."',report='".$report."',date='".$date."',rkey='".$rkey."' where id='".$rid."'";
		// echo $qry;exit();
	$exe=mysql_query($qry);
	if($exe)

{
		echo"<script>alert('Report updation successfull')</script>";
		
}
	else
		echo"<script>alert('Report updation unsuccessful')</script>";

}


function report_view($lkey)
{
	$lid=keytoid("login","lkey",$lkey);
	$qry="SELECT * FROM report where lid='".$lid."' ";
	$exe=mysql_query($qry);

	$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

//guide 26-2-23
//attendance std

function std_attendance_month_view($month,$sem,$lkey)
{

	$adno=keytoid("login","lkey",$lkey);
  $qry="select * from attendance inner join stdreg on stdreg.lid=attendance.slid where month(date)='".$month."' and sem='".$sem."' and adno='".$adno."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}



function std_attendance_daily_view($date,$sem,$lkey)
{
	$adno=keytoid("login","lkey",$lkey);
  $qry="select stdreg.name1 as 'name1',stdreg.name2 as 'name2',stdreg.adno as 'adno',CASE WHEN attendance.fullday = '1' THEN 'PRESENT' ELSE 'ABSENT' END AS 'present' from attendance inner join stdreg on stdreg.lid=attendance.slid where date='".$date."' and sem='".$sem."' order by name1 ,name2 asc ";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}


//attendance tr

function tr_std_attendance_students_view($date,$sem,$lkey)
{
	$tlid=keytoid("login","lkey",$lkey);
$day=date('l',strtotime($date));
// echo$date;exit;
 $qry="select stdreg.name1,stdreg.name2,attendance.s1,attendance.s2,attendance.s3,attendance.s4,attendance.s5,attendance.s6,stdreg.adno from attendance inner join stdreg on stdreg.lid=attendance.slid inner join classtable on classtable.date=attendance.date where attendance.date='".$date."' and classtable.sem='".$sem."' order by name1 ,name2 asc";
// echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	
}



function tr_std_attendance_select_month($date,$sem,$lkey)
{

	$qry="select DISTINCT EXTRACT(DAY FROM attendance.date) AS 'day' FROM attendance WHERE EXTRACT(MONTH FROM attendance.date) = '".$date."' order by day asc";

$exe=mysql_query($qry);
 $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr['day'];
  }
  // print_r($arr);exit;
  return $arr;

}


function tr_std_attendance_students_view_sem($sem,$lkey)
{
	$tlid=keytoid("login","lkey",$lkey);

// echo$date;exit;
 $qry="select COUNT( DISTINCT attendance.date ) AS 'td', ROUND( 100 * ( SUM(CASE WHEN attendance.fullday =1 THEN 1 ELSE 0 END ) / COUNT( * ) ) , 2 ) AS 'Percent', stdreg.sem, stdreg.name1, stdreg.name2, stdreg.lid, stdreg.adno FROM attendance INNER JOIN stdreg ON stdreg.lid = attendance.slid WHERE stdreg.sem = '".$sem."' GROUP BY attendance.slid ORDER BY stdreg.name1, stdreg.name2 ASC";


// echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	
}


function tr_std_attendance_subject_view($date,$sem,$lkey)
{
	$qry="select * from classtable where sem='".$sem."' and date='".$date."'";
	$exe=mysql_query($qry);
	  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
}


function tr_std_attendance_day_view($date,$sem,$lkey)
{
	$tlid=keytoid("login","lkey",$lkey);
$day=date('l',strtotime($date));
 $qry="select * from timetable where day='".$day."' and sem='".$sem."'";
// echo $qry;exit;
// 
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
}


//27-2-23

function report_fetch($rkey)
{
	$rid=keytoid("report","rkey",$rkey);
	$qry="select * from report where id='".$rid."'";
	$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}


function tr_report_delete($rkey,$sem)
{
		$rid=keytoid("report","rkey",$rkey);
		$qry="delete from report where id='".$rid."'";
		// echo$qry;exit;
		$exe=mysql_query($qry);
		if($exe){
echo"<script>alert('Report deleted');window.location.href='tr_report.php?sem=$sem';</script>";

		}
else{
	echo"<script>alert('Report deletion unsuccesful');window.location.href='tr_report.php?sem=$sem';</script>";

	}
}



//4-3-23

function tr_std_attendance_present_fetch($sem)
{
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	$time=date('H:i:s');
	$time2=explode(':',$time);
	$time3=$time2[0]+1;
	$time4=$time3.':'.$time2[1].':'.$time2[2];
	//subject select
				$time5=strtotime($time);


					if($time5>=strtotime("9:30:00") AND $time5<=strtotime("10:29:59"))
				{
					$sub="s1";
				}
					elseif($time5>=strtotime("10:30:00") AND $time5<=strtotime("11:29:59"))
				{
					$sub="s2";
				}
						elseif($time5>=strtotime("11:30:00") AND $time5<=strtotime("12:29:59"))
				{
					$sub="s3";
				}
					elseif($time5>=strtotime("12:30:00") AND $time5<=strtotime("13:29:59"))
				{
					$sub="end";
					// echo"p2";
				}
					elseif($time5>=strtotime("13:30:00") AND $time5<=strtotime("14:29:59"))
				{
					$sub="s4";
				}
					elseif($time5>=strtotime("14:30:00") AND $time5<=strtotime("15:29:59"))
				{
					$sub="s5";
				}
					elseif($time5>=strtotime("15:29:59") AND $time5<=strtotime("16:14:59"))
				{
					$sub="s6";
				}
				else
				{
					$sub="end";
					// echo"p3";
				}
	//subject select end



$qry="select * from attendance inner join stdreg on stdreg.lid=attendance.slid where sem='".$sem."' and date='".$date."' order by name1,name2 asc ";
// echo $qry;exit;
$exe=mysql_query($qry);
$arr=array();
$sid=null;
while($rr=mysql_fetch_array($exe))
{
	$arr[]=$rr;
  $sid=$rr['slid'];
}

if($sid==null)
{
		$qry="select * from stdreg inner join login on stdreg.lid=login.id where stdreg.sem='".$sem."' order by name1,name2 asc ";
	  $exe=mysql_query($qry);
 		$arr1=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr1[]=$rr;
		}
		return $arr1;
}

	return $arr;

}

// -------------------------otp mail-----------------------



function sotp_send($lkey)
{
	$qry="select email from stdreg where std_key='".$lkey."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
	$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['email'];
		}
		return $arr;
}


function totp_send($lkey)
{
	$qry="select email from trreg where tr_key='".$lkey."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
	$arr=null;
		while($rr=mysql_fetch_array($exe))
		{
			$arr=$rr['email'];
		}
		return $arr;
}


function hod_delete_std($sem,$stddlt=null)
{
	// print_r($stddlt);exit;

  	
	$qry="delete from stdreg where std_key='".$stddlt."'";
// echo$qrsy;exit;
	$exe=mysql_query($qry);



	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='hod_students_view.php?sem={$sem}';</script>";
    }


}




//13-3-23
function hod_std_suspend($sspddate,$std_key,$sem)//admin_news.php
{
	date_default_timezone_set("Asia/Kolkata");
	$nkey=uniquekey("news","nkey");
	$date=date('Y-m-d');

	$id=keytoid("login","lkey",$std_key);

	$qry="update stdreg set sspd='".$sspddate."' where lid='".$id."'";
	$exe=mysql_query($qry);
	// echo$qry;exit;


	$qry2="update login set astus='1' where id='".$id."'";
		$exe2=mysql_query($qry2);
		// echo$qry2;exit;
	if($exe2&&$exe)

{
		echo"<script>alert('Student suspended');window.location.href='hod_students_view.php?sem={$sem}';</script>";
		
}
	else
		echo"<script>alert('Student suspension unsuccessful');</script>";

}

function hod_std_suspend_expire()
{
date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d');
$qry1="select sspd from stdreg";
$exe1=mysql_query($qry1);
$arr=array();
	while($rr=mysql_fetch_array($exe1))
	{
		$arr[]=$rr['sspd'];
	}


foreach($arr as $sspd)
{
	// echo$sspd;exit;
	if($sspd<=$date)
	{
		$qry="update stdreg,login set sspd=NULL, login.astus='0' where stdreg.sspd='".$sspd."' and stdreg.lid=login.id";
		// echo$qry;exit;
		$exe=mysql_query($qry);
	}
}


}

function student_profile($std_key)
	{
		
		$qry="select * from stdreg where std_key='".$std_key."'";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	}


function teacher_profile($tr_key)
	{
		
		$qry="select * from trreg where tr_key='".$tr_key."'";
		$exe=mysql_query($qry);
		$arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	}

// --------------------------------------Count---------------------------------

function count_student()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select count(adno) from stdreg";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(adno)'];
	}
	return $arr;
}

function count_teacher()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select count(trid) from trreg";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(trid)'];
	}
	return $arr;
}

function count_book()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select count(bkey) from add_book";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(bkey)'];
	}
	return $arr;
}

function count_req()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select count(ibkey) from req_book";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(ibkey)'];
	}
	return $arr;
}


function count_notice()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select count(nokey) from notice";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(nokey)'];
	}
	return $arr;
}


function count_amt()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select sum(amount) from payment";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['sum(amount)'];
	}
	return $arr;
}
//20-3-22

function hod_addon_enroll_view($sem,$akey,$course)
{
  
  $qry="select distinct stdreg.adno,stdreg.name1,stdreg.name2 ,addon.course,addon.details,stdreg.addon from addon inner join stdreg on stdreg.sem=addon.asem where  stdreg.addon='$akey' and addon.course='$course'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
 
if($arr==NULL)
{
	echo"<script>alert('No Enrolments on this Addon Course')</script>";
}
else
{
	 return $arr;
}

}




//25-3-23
function fetch_utyp($lkey)
{
	$id=keytoid("login","lkey",$lkey);
$qry="select utyp from login where id='".$id."'";
$exe=mysql_query($qry);
$utyp=null;
	while($rr=mysql_fetch_array($exe))
	{
		$utyp=$rr['utyp'];

	}
	return $utyp;
}

//atcde month
function atdce_std_view($sem)
{
	
	$qry="select distinct stdreg.name1 AS 'name1',stdreg.name2 AS'name2',stdreg.lid AS 'lid' FROM attendance inner join stdreg on stdreg.lid=attendance.slid where stdreg.sem='".$sem."' order by name1,name2 asc";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}





function tr_std_attendance_students_view_month($date,$sem,$lkey)
{
	$tlid=keytoid("login","lkey",$lkey);

	$qry="
select distinct EXTRACT(MONTH FROM attendance.date ) AS 'month', attendance.fullday AS 'fullday', EXTRACT( DAY FROM attendance.date ) AS 'days', stdreg.lid AS 'lid', CASE WHEN attendance.fullday = '1' THEN 'P' ELSE 'A' END AS 'status' FROM attendance INNER JOIN stdreg ON stdreg.lid = attendance.slid WHERE stdreg.sem = '".$sem."' AND EXTRACT(MONTH FROM attendance.date ) = '".$date."' ORDER BY stdreg.name1, stdreg.name2 ASC , days ASC ";
// echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	
}


function tr_std_attendance_students_view_month_percent($date,$sem,$lkey)
{
	$tlid=keytoid("login","lkey",$lkey);

	$qry="
select stdreg.lid AS 'lid', EXTRACT( DAY FROM attendance.date ) AS 'days', COUNT( CASE WHEN attendance.fullday = '1' THEN 1 END ) / COUNT( 'days' ) *100 AS 'percent' FROM attendance INNER JOIN stdreg ON stdreg.lid = attendance.slid WHERE stdreg.sem = '1' AND EXTRACT( MONTH FROM attendance.date ) = '".$date."' GROUP BY lid HAVING percent <= 100 ORDER BY stdreg.name1, stdreg.name2 ASC , days ASC";
// echo $qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{

			$arr[]=$rr;
		}
		return $arr;
	
}
//26-3-23
//chat
function msg_send($slid,$msg,$rlid)//
{
	//$skey for page refresh
	$ckey=uniquekey("chat","ckey");
	date_default_timezone_set("Asia/Kolkata");
	$currtime=date('h:i:sa');
	$time1= date('H:i', strtotime($currtime));
	$currdate=date('Y-m-d');
	$qry="insert into chat(ckey,msg,slid,rlid,date,time)values('".$ckey."','".$msg."','".$slid."','".$rlid."','".$currdate."','".$time1."')";
	// echo$qry;exit;
	$exe=mysql_query($qry);
}

function chat_msgs($rlid,$slid)
{
  $qry="select * from chat where(rlid='".$slid."' and slid='".$rlid."' and sem=0) or (rlid='".$rlid."' and slid='".$slid."' and sem=0) order by date asc, time asc";
    $exe=mysql_query($qry);
    // echo$qry;exit;
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}


function tr_std_chat1($sem)
{
  $qry="select * from stdreg inner join login on login.id=stdreg.lid where stdreg.sem='".$sem."' order by stdreg.name1,stdreg.name2 asc";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}

function std_tr_chat1()
{
  $qry="select * from trreg inner join login on login.id=trreg.lid order by trreg.name1 ,trreg.name2 asc";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
}


function rec_tr($tr_key)
{
$qry="select * from trreg where tr_key='".$tr_key."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	}


	function rec_std($std_key)
{
$qry="select * from stdreg where std_key='".$std_key."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
		while($rr=mysql_fetch_array($exe))
		{
			$arr[]=$rr;
		}
		return $arr;
	}


// -------------------------------------notes download----------------------
function std_notes_download($ntkey,$lkey,$note)
{
	date_default_timezone_set("Asia/Kolkata");
	$lid=keytoid("login","lkey",$lkey);
	
	$qry1="select ntkey from downloads where ntkey='".$ntkey."'";
		// echo$qry1;exit;
		$exe1=mysql_query($qry1);
		$enc1=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$enc1=$rr['ntkey'];
		}

if($enc1==null)
{
		$date=date('Y-m-d');
	$time=date('h:i:sa');
	$qry="insert into downloads(ntkey,lid,date,time)values('".$ntkey."','".$lid."','".$date."','".$time."')";
	$exe=mysql_query($qry);

}

		header("location:uploads/{$ntkey}/{$note}");

// 		header('Content-Disposition: attachment; filename="{$note}"');
// readfile('uploads/{$ntkey}/{$note}');
	

}



function std_list($sem)
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM stdreg where sem='$sem'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}


function tr_std_handin_view($ntkey)
{

  $qry="SELECT stdreg.name1 AS 'name1', stdreg.name2 AS 'name2', stdreg.adno AS 'adno', stdreg.lid, downloads.ntkey AS 'ntkey', (

CASE WHEN downloads.ntkey = '".$ntkey."'
AND stdreg.lid = downloads.lid
THEN downloads.time
ELSE 'Pending'
END
) AS 'time', (

CASE WHEN downloads.ntkey = '".$ntkey."'
AND stdreg.lid = downloads.lid
THEN downloads.date
ELSE 'Pending'
END
) AS 'date', (

CASE WHEN downloads.ntkey = '".$ntkey."'
AND stdreg.lid = downloads.lid
THEN 'Handed in'
ELSE 'Pending'
END
) AS 'handin'
FROM downloads, stdreg
WHERE ntkey = '".$ntkey."'
ORDER BY name1, name2 ASC";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}

function group_send($msg,$slid,$sem)
{
	$ckey=uniquekey("chat","ckey");
	date_default_timezone_set("Asia/Kolkata");
	$currtime=date('h:i:sa');
		$time1= date('H:i', strtotime($currtime));
	$currdate=date('Y-m-d');
	$qry="insert into chat(ckey,msg,slid,date,time,sem)values('".$ckey."','".$msg."','".$slid."','".$currdate."','".$time1."','".$sem."')";
	// echo$qry;exit;
	$exe=mysql_query($qry);		
}

function group_msgs($sem)
{
 $qry="SELECT stdreg.name1 AS 'name1', stdreg.name2 AS 'name2', chat.msg as 'msg', chat.time as 'time', chat.date as 'date'
FROM chat
INNER JOIN stdreg ON stdreg.lid = chat.slid
WHERE chat.sem = '".$sem."' 
UNION
SELECT trreg.name1 AS 'name1', trreg.name2 AS 'name2', chat.msg as 'msg', chat.time as 'time', chat.date as 'date'
FROM chat
INNER JOIN trreg ON chat.slid = trreg.lid
WHERE chat.sem = '".$sem."' 
ORDER BY DATE ASC , TIME ASC";
    $exe=mysql_query($qry);
    // echo$qry;exit;
  $arr=array();
  while($rr=mysql_fetch_array($exe))
  {
    $arr[]=$rr;
  }
  return $arr;
}

function addon_edit_view($akey)//admin_news_edit.php
{
	// echo$key;exit;
	
   
   $qry="select * from addon where akey='".$akey."'";
   // echo$qry;exit;
   $exe=mysql_query($qry);
   $arr=array();
   $arr=null;
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;

}

function edit_addon($title,$details,$files=NULL,$akey)
{
	
	$qry="update addon set course='".$title."',details='".$details."',img1='".$files['name']."' where akey='".$akey."'";
	// echo $qry; exit;
	$exe=mysql_query($qry);
	$d="uploads/".$akey;

		if($exe)
		{
			// mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
}


function url_delete($clkey,$sem){

	$qry="delete from class where clkey='".$clkey."'";
	$exe=mysql_query($qry);



	if($exe)

{
		echo"<script>alert('Deletion successful');window.location.href='tr_std_class.php?sem=$sem';</script>";
		
}
	else
	{
		echo"<script>alert('Deletion unsuccessful');window.location.href='tr_std_class.php?sem=$sem';</script>";
	}
}

}
?>