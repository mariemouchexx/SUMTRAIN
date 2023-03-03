<?php
session_start();
$_SESSION["loginCheck"] = false;
$_SESSION = array();
session_destroy();
header("location: login.php");
?>