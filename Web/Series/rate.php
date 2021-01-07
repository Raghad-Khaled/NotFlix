<?php
include '../control.php';

if(isset($_POST['submit'])){

if($_POST['rate']!=''){


$serie=new series;
$rate=$_POST['rate'];
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);

$serie->addratetoSerie($name,$id,$rate);

    }
header("Location:Serie_page.php?id=$id&name=$name");
}
?>