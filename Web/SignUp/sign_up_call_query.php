<?php

include '../control.php';
if(isset($_POST['signup']))
{

$username=$_POST['username'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$password=password_hash($password, PASSWORD_DEFAULT);

$save_user=new user;
$save_user->InsertNewUser($username,$password,$email,$age,$gender);
session_start();
$_SESSION['name'] ='name';
$_SESSION['type'] ='user';
$_SESSION['email'] ='email';

//header("Location:../Home_movies/Movies.php?name=$password");

}

?>