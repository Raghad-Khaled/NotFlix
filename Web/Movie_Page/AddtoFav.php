<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$path=$_SESSION['path'];
$user =new user;
$name=$user->GetnameWithpass($path);
$movie=new movie;
$movie->insertFilmtoFav($name,$id);

header("Location:Movie_page.php?id=$id");
?>