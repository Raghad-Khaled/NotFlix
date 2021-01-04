<?php
include '../control.php';
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);
$user=new user();
$user->RemoveFilmFromFavorite($id, $name);

header("Location:user.php?name=$name");
?>