<?php
include '../control.php';
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$name=$_SESSION['path'];
$user=new user();
$user->RemoveSeriesFromFavorite($id, $name);

header("Location:user.php?name=$name");
?>