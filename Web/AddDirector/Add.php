<?php
include '../control.php';
if(isset($_POST['submit']))
{
$postar= $_POST['postar'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$birthdate=$_POST['birthdate'];
$gendr=$_POST['gendr'];

//echo $postar;
echo $Fname;
echo $Lname;
echo $gendr;
$director=new director;
$director->insertdirector($Fname,$Lname,$gendr,$birthdate,$postar);

header("Location:AddDirector.php");
}    

?>