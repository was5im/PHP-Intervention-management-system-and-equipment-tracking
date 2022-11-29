<?php
session_start();
session_destroy();
unset($_SESSION['DR_id']);
unset($_SESSION['DR_Dname']);
unset($_SESSION['DR_Uname']);
$_SESSION['message'] = "you are now logged out";
header("location: ../Login/login.php");

?>