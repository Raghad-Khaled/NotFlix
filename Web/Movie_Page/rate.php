<?php
include '../control.php';

if(isset($_POST['submit'])){

if($_POST['rate']!=''){
session_start();

$movie=new movie;
$rate=$_POST['rate'];
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$movie->addratetoFilm($_SESSION['name'],$id,$rate);

    }
header("Location:Movie_page.php?id=$id");
}
?>