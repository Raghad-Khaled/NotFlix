<?php

include '../control.php';

session_start();
$_SESSION['name'] ="";
$_SESSION['type'] ="";
$_SESSION['email'] ="";
$_SESSION['path'] ="";
$_SESSION['age'] = "";
$_SESSION['gender'] = "";
$_SESSION['image'] = "";

header("Location:../SignIn/SignIn.html");

?>