<?php
include '../control.php';

if(isset($_POST['submit'])){

if($_POST['rate']!=''){


$serie=new series;
$rate=$_POST['rate'];
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$path=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);
$user =new user;
$name=$user->GetnameWithpass($path);

$serie->addratetoSerie($name,$id,$rate);

    }
header("Location:Serie_page.php?id=$id&name=$path");
}
?>