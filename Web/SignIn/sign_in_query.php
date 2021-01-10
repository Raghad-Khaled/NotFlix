<?php

include '../control.php';
if(isset($_POST['signin']))
{

session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];

$admin = new admin;
$result = $admin -> Admin_Sign_In($_SESSION['email']);

if($result->num_rows != 0){

    $_SESSION['type'] = 'admin';
    $data=mysqli_fetch_assoc($result);
    $v = password_verify($_SESSION['password'], $data['PASSWORD_OF_ADMIN']);
    if($v){
      $_SESSION['name'] = $data['ADMIN_NAME'];
      $_SESSION['image'] = $data['image'];
      $_SESSION['path'] =$data['PASSWORD_OF_ADMIN'];
      $_SESSION['age'] = $data['AGE'];
      $_SESSION['gender'] = $data['GENDER'];
      echo "<script> alert('Welcome Back!!!!'); window.location.href='../Home_movies/Movies.php';</script>";
    }
    else{
      echo "<script> alert('Wrong password'); window.location.href='SignIn.html';</script>";
      //echo password_hash(1234, PASSWORD_DEFAULT);
    }
}else{
    $_SESSION['type'] = 'user';
    $user_sign_in =new user;
    
    $record = $user_sign_in->User_Sign_In($_SESSION['email']);
    if($record->num_rows == 0){
        echo "<script> alert('Wrong Email') window.location.href='SignIn.html';</script>";
      }
      else{
        $data=mysqli_fetch_assoc($record);
        $v = password_verify($_SESSION['password'], $data['PASSWORD_OF_USER']);
        if($v){
          $_SESSION['name'] = $data['USER_NAME'];
          $_SESSION['image'] = $data['image'];
          $_SESSION['path'] =$data['PASSWORD_OF_USER'];
          $_SESSION['age'] = $data['AGE'];
          $_SESSION['gender'] = $data['GENDER'];
          
          echo "<script> alert('Welcome Back!!!!'); window.location.href='../Home_movies/Movies.php';</script>";
        }
        else{
          echo "<script> alert('Wrong password'); window.location.href='SignIn.html';</script>";
        }
      }
}

// echo $_SESSION['email'];
// echo  $_SESSION['password'];
// echo $_SESSION['type'];
  

}
