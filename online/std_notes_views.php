<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
$z=$obj->std_notes_views($sem);
$smartyObj->assign("data",$z);

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['sname'])AND($_POST['sname'])!=NULL)
  
  {
  	if(isset($_POST['topic'])AND($_POST['topic'])!=NULL)
  {
    $sname=trim($_POST['sname']);
   
    $topic=trim($_POST['topic']);
    $j=$obj->notes_search($sname,$sem,$topic);
        $smartyObj->assign("data",$j);
  }
  

}
else
    echo"<script>alert('Product Does Not Exist')</script>";
}
$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('std_all_notes_views.tpl');
$smartyObj->display('student_footer.tpl');
?>