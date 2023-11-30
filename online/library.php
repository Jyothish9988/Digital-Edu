<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$s=$obj->library();
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['bnam'])AND($_POST['bnam'])!=NULL)
  {
    $bnam=trim($_POST['bnam']);
    $j=$obj->booksearch($bnam);
        $smartyObj->assign("data",$j);
  }
  else
    echo"<script>alert('Book Does Not Exist !!')</script>";
}
$smartyObj->display('library.tpl');
?>