<?php
include '../control.php';
if(isset($_POST['submit1']))
{

$title=$_POST['title1'];
$type=$_POST['Type1'];
$year=$_POST['year1'];
$year=substr($year,0,4);
$movie=$_POST['movie1'];
$actor=$_POST['actor1'];

if(empty($title)||empty($type)||empty($year)||empty($movie)||empty($actor))
echo "<script> alert('Please set all the inputs');  window.location.href='AddPrize.php';</script>";
else{
$prize=new prize;
$check=$prize->exist($title,$type);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$prize->InsertActorMovie($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertActorMovie($actor,$movie,$data['ID'],$year);
}}  
}
////////////////
if(isset($_POST['submit2']))
{
$title=$_POST['title2'];
$type=$_POST['Type2'];
$year=$_POST['year2'];
$year=substr($year,0,4);
$movie=$_POST['Series2'];
$actor=$_POST['actor2'];
if(empty($title)||empty($type)||empty($year)||empty($movie)||empty($actor))
echo "<script> alert('Please set all the inputs');  window.location.href='AddPrize.php';</script>";
else{
$prize=new prize;
$check=$prize->exist($title,$type);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$prize->InsertActorSeries($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertActorSeries($actor,$movie,$data['ID'],$year);
}}
}    
//////////////
if(isset($_POST['submit3']))
{
$title=$_POST['title3'];
$type=$_POST['Type3'];
$year=$_POST['year3'];
$year=substr($year,0,4);
$movie=$_POST['series3'];
$actor=$_POST['director3'];
if(empty($title)||empty($type)||empty($year)||empty($movie)||empty($actor))
echo "<script> alert('Please set all the inputs');  window.location.href='AddPrize.php';</script>";
else{
$prize=new prize;
$check=$prize->exist($title,$type);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$prize->InsertDirectorSeries($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertDirectorSeries($actor,$movie,$data['ID'],$year);
}
}
}
/////////////////////
if(isset($_POST['submit4']))
{
$title=$_POST['title4'];
$type=$_POST['Type4'];
$year=$_POST['year4'];
$year=substr($year,0,4);
$movie=$_POST['movie4'];
$actor=$_POST['director4'];
if(empty($title)||empty($type)||empty($year)||empty($movie)||empty($actor))
echo "<script> alert('Please set all the inputs');  window.location.href='AddPrize.php';</script>";
else{
$prize=new prize;
$check=$prize->exist($title,$type);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$prize->InsertDirectorMovie($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertDirectorMovie($actor,$movie,$data['ID'],$year);
}
}
} 
/////////////////////////
if(isset($_POST['submit5']))
{

$title=$_POST['title5'];
$type=$_POST['Type5'];


if(empty($title)||empty($type))
echo "<script> alert('Please set all the inputs');  window.location.href='AddPrize.php';</script>";
else{
$prize=new prize;
$check=$prize->exist($title,$type);
if($check->num_rows!=0){
    echo "<script> alert('This Prize already exist');  window.location.href='AddPrize.php';</script>";
}
else{
$prize->InsertPrize($title,$type);}

}
}    

?>