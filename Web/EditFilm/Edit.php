<?php

include '../control.php';
if(isset($_POST['submit']))
{
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_GET, 'Admin_name', FILTER_SANITIZE_STRING);

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
if($_POST['story']!=''){
$actor1=$_POST['story'];
$movie->UpdateNewMovie($id,$title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,$name,$rate,$count,$Director,$prize,$story);
}
else{
    $movie->UpdateNewMovie($id,$title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,$name,$rate,$count,$Director,$prize,NULL);    
}

$genre=new genre;
$check=$genre->exist($genre1);
if($check->num_rows!=0){
$data = mysqli_fetch_array($check);
$movie->addgenretofilm($id,$data['ID']);
}
else{
$genre->insert($genre1);
$check=$genre->exist($genre1);
$data = mysqli_fetch_array($check);
$movie->addgenretofilm($id,$data['ID']);
}
if(isset($_POST['genre2'])){

    $genre2=$_POST['genre2'];
    $check=$genre->exist($genre2);
    if($check->num_rows!=0){
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($id,$data['ID']);
    }
    else{
    $genre->insert($genre2);
    $check=$genre->exist($genre2);
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($id,$data['ID']);
}
}
if($_POST['genre3']!=NULL){
    $genre2=$_POST['genre3'];
    $check=$genre->exist($genre3);
    if($check->num_rows!=0){
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($id,$data['ID']);
    }
    else{
    $genre->insert($genre3);
    $check=$genre->exist($genre3);
    $data = mysqli_fetch_array($check);
    $movie->addgenretofilm($id,$data['ID']);
    }
}

$movie->addactortofilm($id,$actor1);

if(isset($_POST['actor2'])){
    $actor2=$_POST['actor2'];
    $movie->addgenretofilm($id,$actor2);
}
if(isset($_POST['actor3'])){
    $genre2=$_POST['actor3'];
    $movie->addgenretofilm($id,$actor3);
}
$movie->addcompanytofilm($id,$company1);

if(isset($_POST['company2'])){
    $company2=$_POST['company2'];
    $movie->addgenretofilm($id,$company2);
}
if(isset($_POST['company3'])){
    $company3=$_POST['company3'];
    $movie->addgenretofilm($id,$company3);
}

}

?>