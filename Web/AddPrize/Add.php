<?php
include '../control.php';
if(isset($_POST['submit']))
{

$title=$_POST['title'];
$type=$_POST['Type'];
$year=$_POST['year'];
$year=substr($year,0,4);
$movie=$_POST['movie'];
$actor=$_POST['actor'];

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

?>