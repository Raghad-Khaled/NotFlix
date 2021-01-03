<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);

$movie=new movie;
$movie->insertFilmtoFav($name,$id);

header("Location:Movie_page.php?id=$id&name=$name");
?>