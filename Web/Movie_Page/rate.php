<?php
include '../control.php';

if(isset($_POST['submit'])){

if($_POST['rate']!=''){


$movie=new movie;
$rate=$_POST['rate'];
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$path=$_SESSION['path'];
$user =new user;
$name=$user->GetnameWithpass($path);
$movie->addratetoFilm($name,$id,$rate);

    }
header("Location:Movie_page.php?id=$id&name=$path");
}
?>