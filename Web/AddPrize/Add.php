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

$prize=new prize;
$check=$prize->exist($title,$type);
if($check){
$data = mysqli_fetch_array($check);
$prize->InsertActorMovie($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertActorMovie($actor,$movie,$data['ID'],$year);
}

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

$prize=new prize;
$check=$prize->exist($title,$type);
if($check){
$data = mysqli_fetch_array($check);
$prize->InsertActorSeries($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertActorSeries($actor,$movie,$data['ID'],$year);
}

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

$prize=new prize;
$check=$prize->exist($title,$type);
if($check){
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
/////////////////////
if(isset($_POST['submit4']))
{
$title=$_POST['title4'];
$type=$_POST['Type4'];
$year=$_POST['year4'];
$year=substr($year,0,4);
$movie=$_POST['movie4'];
$actor=$_POST['director4'];

$prize=new prize;
$check=$prize->exist($title,$type);
if($check){
$data = mysqli_fetch_array($check);
$prize->InsertDirectorMovie($actor,$movie,$data['ID'],$year);
}
else{
$prize->InsertPrize($title,$type);
$check=$prize->exist($title,$type);
$data = mysqli_fetch_array($check);
$prize->InsertDirectorMovies($actor,$movie,$data['ID'],$year);
}

}     

?>