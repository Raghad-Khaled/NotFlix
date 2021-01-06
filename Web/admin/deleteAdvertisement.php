<?php
include '../control.php';
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$name=filter_input(INPUT_GET,'Admin_name',FILTER_SANITIZE_STRING);
$movie=new series();
$movie->DeleteSerieswithId($id);

header("Location:admin.php?Admin_Name=$name");
?>