<?php
session_start();
require_once('../db/config.php');
require_once('../const/organization.php');
require_once('../const/check_session.php');
require_once('../const/user_dashboard.php');
if ($res == 1 && $level == 2) {
if (isset($_GET['page'])) {
require_once('pages/'.$_GET['page'].'.php');
}else{
header("location:../");
}
}else{
header("location:../");
}
?>
