<?php
session_unset();
session_destroy();
setcookie("logined");
header("location:index.php");
?>