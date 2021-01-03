<?php
include '../control.php';
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$movie=new movie();
$movie->RemoveFromFavorite($id, $name);

header("Location:user.php");
?>