<?php
include '../control.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$year=$_POST['year'];
$year=substr($year,0,4);
$company=new company;

$company->insertnewCompany($name,$year);
header("Location:AddCompany.php");

}
?>