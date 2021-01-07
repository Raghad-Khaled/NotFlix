<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);

$serie=new series;
$serie->insertSerietoFav($name,$id);

header("Location:Serie_page.php?id=$id&name=$name");
?>