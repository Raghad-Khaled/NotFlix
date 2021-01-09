<?php

include '../control.php';
if(isset($_POST['submit']))
{
    if (!isset($_POST['company1'])||! isset($_POST['Director'])|| !isset($_POST['actor1']) )
{
    echo "<script> alert('please Fill All input!');  window.location.href='AddSeries.php';</script>";
}

session_start();
$postar= $_POST['postar'];
$title=$_POST['title'];
$year=$_POST['year'];
$year=substr($year,0,4);
$duration=$_POST['duration'];
$budget=$_POST['buget'];
$revenue=$_POST['revenue'];
$rate=$_POST['rate'];
$count=$_POST['count'];
$link=$_POST['link'];
$language=$_POST['language'];
$Director=$_POST['Director'];
$Episodes=$_POST['Episodes'];

$description=$_POST['description'];
$genre1=$_POST['genre1'];
$company1=$_POST['company1'];
$actor1=$_POST['actor1'];



$Series=new series;
if(isset($_POST['prize'])){
$prize=$_POST['prize'];
$Series->InsertNewSeries($title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,$_SESSION['name'],$rate,$count,$Episodes,$Director,$prize);    
}
else{
    $Series->InsertNewSeries($title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,$_SESSION['name'],$rate,$count,$Episodes,$Director,NULL);
}
$IDrow=$Series->getid($title);
$data = mysqli_fetch_array($IDrow);
$ID = $data['ID'];
///////////////////////////////////////////
$genre=new genre;
$check=$genre->exist($genre1);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$Series->addgenretoSeries($ID,$data['ID']);
}
else{
$genre->insert($genre1);
$check=$genre->exist($genre1);
$data = mysqli_fetch_array($check);
$Series->addgenretoSeries($ID,$data['ID']);
}
////////////////////////////////////////////////
if(isset($_POST['genre2'])){

    $genre2=$_POST['genre2'];
    $check=$genre->exist($genre2);
    if($check->num_rows!=0){
    $data = mysqli_fetch_array($check);
    $Series->addgenretoSeries($ID,$data['ID']);
    }
    else{
    $genre->insert($genre2);
    $check=$genre->exist($genre2);
    $data = mysqli_fetch_array($check);
    $Series->addgenretoSeries($ID,$data['ID']);
}
}
if($_POST['genre3']!=''){
    $genre2=$_POST['genre3'];
    $check=$genre->exist($genre3);
    if($check->num_rows!=0){
    $data = mysqli_fetch_array($check);
    $Series->addgenretoSeries($ID,$data['ID']);
    }
    else{
    $genre->insert($genre3);
    $check=$genre->exist($genre3);
    $data = mysqli_fetch_array($check);
    $Series->addgenretoSeries($ID,$data['ID']);
    }
}
///////////////////////////////////////////////////
$Series->addactortoSeries($ID,$actor1);

if(isset($_POST['actor2'])){
    $actor2=$_POST['actor2'];
    $Series->addactortoSeries($ID,$actor2);
}
if(isset($_POST['actor3'])){
    $actor3=$_POST['actor3'];
    $Series->addactortoSeries($ID,$actor3);
}
$Series->addcompanytoSeries($ID,$company1);

if(isset($_POST['company2'])){
    $company2=$_POST['company2'];
    $Series->addcompanytoSeries($ID,$company2);
}
if(isset($_POST['company3'])){
    $company3=$_POST['company3'];
    $Series->addcompanytoSeries($ID,$company3);
}

header("Location:AddSeries.php");
}

?>