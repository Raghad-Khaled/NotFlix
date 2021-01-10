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
session_start();
$_SESSION['name'] =$username;
$_SESSION['type'] ='user';
$_SESSION['email'] =$email;
$_SESSION['path'] =$password;
$_SESSION['age'] = $age;
$_SESSION['gender'] = $gender;
$save_user->InsertNewUser($username,$password,$email,$age,$gender);

if($gender=='F'){
    $image="F.png";
  }
  else{
    $image="M.png";
  }
$_SESSION['image'] = $image;

header("Location:../Home_movies/Movies.php");

}

?>