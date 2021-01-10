<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
session_start();
$path=$_SESSION['path'];
$movie=new movie;
$movie->insertFilmtoFav($_SESSION['name'],$id);

header("Location:Movie_page.php?id=$id");
?>