<?php
include '../control.php';
if(isset($_POST['submit']))
{

$title=$_POST['title'];
$type=$_POST['Type'];
$year=$_POST['year'];
$year=substr($year,0,4);


$prize=new prize;
$prize->InsertPrize($title,$type,$year);

}    

?>