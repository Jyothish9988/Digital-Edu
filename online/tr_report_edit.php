  <?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$rkey=$_GET['rkey'];
$smartyObj->assign("sem",$sem);

// $s=$obj->report_view($lkey);
// $smartyObj->assign("data",$s);
$r=$obj->report_fetch($rkey);
$smartyObj->assign("data",$r);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['title'])AND($_POST['title'])!=NULL)
{
  if(isset($_POST['report'])AND($_POST['report'])!=NULL)
  {
    
      $title=trim($_POST['title']);
      $report=trim($_POST['report']);
      $obj->std_report_update($title,$report,$sem,$rkey);
    
  }
  else
    echo"<script>alert('Report is empty')</script>";
}
else
echo"<script>alert('Title is empty')</script>";
}

$smartyObj->display('teacher_sub_header.tpl');
$smartyObj->display('report_edit.tpl');
$smartyObj->display('teacher_footer.tpl');

?>


