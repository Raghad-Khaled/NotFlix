<?php
include '../control.php';
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
//$name=filter_input(INPUT_GET,'Admin_name',FILTER_SANITIZE_STRING);
$movie=new movie();
$movie->DeleteMoviewithId($id);

header("Location:admin.php");
?>