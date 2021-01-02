<?php

include '../control.php';
if(isset($_POST['submit']))
{


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






$genre1=$_POST['genre1'];

echo $genre1;

$company1=$_POST['company1'];



$language=$_POST['language'];
$Director=$_POST['Director'];
$story=$_POST['story'];
$prize=$_POST['prize'];
$description=$_POST['description'];



$movie=new Movie;
if($_POST['actor1']!=''){
$actor1=$_POST['actor1'];
$movie->InsertNewMovie($title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,"Raghad",$rate,$count,$Director,$prize,$story);
}
else{
    $movie->InsertNewMovie2($title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,"Raghad",$rate,$count,$Director,$prize);    
}
$IDrow=$movie->getid($title);
$data = mysqli_fetch_array($IDrow);
$ID = $data['ID'];

$genre=new genre;
$check=$genre->exist($genre1);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$movie->addgenretofilm($ID,$data['ID']);
}
else{
$genre->insert($genre1);
$check=$genre->exist($genre1);
$data = mysqli_fetch_array($check);
$movie->addgenretofilm($ID,$data['ID']);
}
if(isset($_POST['genre2'])){

    $genre2=$_POST['genre2'];
    $check=$genre->exist($genre2);
    if($check->num_rows!=0){
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($ID,$data['ID']);
    }
    else{
    $genre->insert($genre2);
    $check=$genre->exist($genre2);
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($ID,$data['ID']);
}
}
if($_POST['genre3']!=''){
    $genre2=$_POST['genre3'];
    $check=$genre->exist($genre3);
    if($check->num_rows!=0){
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($ID,$data['ID']);
    }
    else{
    $genre->insert($genre3);
    $check=$genre->exist($genre3);
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($ID,$data['ID']);
    }
}

$movie->addactortofilm($ID,$actor1);

if(isset($_POST['actor2'])){
    $actor2=$_POST['actor2'];
    $movie->addgenretofilm($ID,$actor2);
}
if(isset($_POST['actor3'])){
    $genre2=$_POST['actor3'];
    $movie->addgenretofilm($ID,$actor3);
}
$movie->addcompanytofilm($ID,$company1);

if(isset($_POST['company2'])){
    $company2=$_POST['company2'];
    $movie->addgenretofilm($ID,$company2);
}
if(isset($_POST['company3'])){
    $company3=$_POST['company3'];
    $movie->addgenretofilm($ID,$company3);
}

}

?>