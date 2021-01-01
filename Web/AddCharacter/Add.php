<?php
include '../control.php';
if(isset($_POST['submit']))
{
$postar= $_POST['postar'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$birthdate=$_POST['birthdate'];
$gendr=$_POST['gendr'];
$story=$_POST['story'];
$Overview=$_POST['Overview'];

//echo $postar;

$character=new character;
$character->insertcharacter($Fname,$Lname,$gendr,$birthdate,$postar,$story,$Overview);


}    

?>