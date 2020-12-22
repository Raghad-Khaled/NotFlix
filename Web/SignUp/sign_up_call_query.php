<?php

include '../control.php';
if(isset($_POST['signup']))
{

$username=$_POST['username'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$save_user=new user;
$save_user->InsertNewUser($username,$password,$email,$age,$gender);

}

?>