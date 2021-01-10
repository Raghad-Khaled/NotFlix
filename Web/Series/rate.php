<?php
include '../control.php';

if(isset($_POST['submit'])){

if($_POST['rate']!=''){

session_start();
$serie=new series;
$rate=$_POST['rate'];
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$serie->addratetoSerie($_SESSION['name'] ,$id,$rate);

    }
header("Location:Serie_page.php?id=$id");
}
?>