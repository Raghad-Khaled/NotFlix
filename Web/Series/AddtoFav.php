<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
session_start();
$serie=new series;
$serie->insertSerietoFav($_SESSION['name'],$id);

header("Location:Serie_page.php?id=$id");
?>