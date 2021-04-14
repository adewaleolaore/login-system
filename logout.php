<?php

session_start();

//Empty all the session variables
$_SESSION = array();

//Destroy the session
session_destroy();

//Redirect to login
header("location: login.php");
exit();

?>

