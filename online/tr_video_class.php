<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj = new userclass();
$lkey = $_COOKIE['lkey'];
$sem = $_GET['sem'];
$smartyObj->assign("sem", $sem);

$subject = $_GET['subject'];
$smartyObj->assign("subject", $subject);

$clkey = $_GET['clkey'];
$smartyObj->assign("clkey", $clkey);

$utyp = $obj->fetch_utyp($lkey);
$smartyObj->assign("utyp", $utyp);

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";

$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['REQUEST_URI'];

$hash = $obj->select_class_hash($clkey);
$smartyObj->assign("hash", $hash);
$url .= '#' . $hash;

$smartyObj->assign("view", $url);
$smartyObj->assign("view1", $clkey);

$obj->tr_video_class($sem, $clkey, $url);



$smartyObj->display("tr_video_class.tpl");
?>
