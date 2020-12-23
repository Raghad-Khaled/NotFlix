<?php

include '../control.php';
if(isset($_POST['signin']))
{


$email=$_POST['email'];
$password=$_POST['password'];

$user_sign_in =new user;

$user_sign_in->User_Sign_In($email,$password);
}

?>