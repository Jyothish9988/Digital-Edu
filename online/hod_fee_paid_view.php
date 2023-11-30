<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$s=$obj->fee_paid_fetch_view($sem);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
  {

    $name1=trim($_POST['name1']);
    $j=$obj->fee_paid_fetch($name1,$sem);
        $smartyObj->assign("data",$j);
  }
  else
    echo"<script>alert('Data Does Not Exist !!')</script>";
}



$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('admin_fee_paid_view.tpl');
$smartyObj->display('hod_footer.tpl');
}
else
{ 
  Header("location:login.php");
}
?>