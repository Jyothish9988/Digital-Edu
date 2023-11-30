<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);
// $y=$obj->hod_students_view();
// $smartyObj->assign("view1",$y);
$y=$obj->hod_all_student_info($sem);
// $z=$obj->hod_new_student_info($sem);
$smartyObj->assign("view1",$y);
// $smartyObj->assign("view2",$z);

$obj->hod_std_suspend_expire();

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
  if(isset($_POST['name1'])AND($_POST['name1'])!=NULL)
 
  {
    $name1=trim($_POST['name1']);
    
    $j=$obj->hod_std_search($name1);
        $smartyObj->assign("data",$j);
  }
  

else
    echo"<script>alert('No Data Found !')</script>";
}




if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{



    $stddlt=$_POST['stddlt'];

  foreach( $stddlt as $stdkey)
{

  $s=$obj->hod_delete_std($sem,$stdkey);
}


}

$smartyObj->display('hod_sub_header.tpl');
$smartyObj->display('hod_students_view.tpl');
$smartyObj->display('hod_footer.tpl');

?>



