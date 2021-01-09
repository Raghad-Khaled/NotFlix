<?php
include '../control.php';
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
session_start();
$name = $_SESSION['path'];
$user=new user();
$user->RemoveFilmFromFavorite($id, $_SESSION['name']);

header("Location:user.php?name=$name");
?>