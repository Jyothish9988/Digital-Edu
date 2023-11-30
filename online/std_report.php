  <?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

$lkey=$_COOKIE['lkey'];
$sem=$_GET['sem'];
$smartyObj->assign("sem",$sem);

$s=$obj->report_view($lkey);
$smartyObj->assign("data",$s);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
if(isset($_POST['title'])AND($_POST['title'])!=NULL)
{
  if(isset($_POST['report'])AND($_POST['report'])!=NULL)
  {
    
      $title=trim($_POST['title']);
      $report=trim($_POST['report']);
      $obj->std_report_upload($title,$report,$sem,$lkey);
    
  }
  else
    echo"<script>alert('Report is empty')</script>";
}
else
echo"<script>alert('Title is empty')</script>";
}

$smartyObj->display('student_sub_header2.tpl');
$smartyObj->display('report.tpl');
$smartyObj->display('student_footer.tpl');
?>


