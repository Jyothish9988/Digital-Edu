<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$z=$obj->hod_pta_fetch($sem);
$smartyObj->assign("pta",$z);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['batch'])AND($_POST['batch'])!=NULL)
 
  {
     if(isset($_POST['date'])AND($_POST['date'])!=NULL)
 
  {
    $batch=trim($_POST['batch']);
    $date=trim($_POST['date']);
    $obj->hod_pta_submit($batch,$date,$sem);

    
 
  }
  

else
    echo"<script>alert('Submission successful!')</script>";
}
else
    echo"<script>alert('Unsuccessful')</script>";
}


$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('hod_pta_submit.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{   
    Header("location:login.php");
}
?>



