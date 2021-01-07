<?php

include '../control.php';
if(isset($_POST['submit']))
{
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_GET, 'Admin_Name', FILTER_SANITIZE_STRING);

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

$prize=$_POST['prize'];
$description=$_POST['description'];
$actor1=$_POST['actor1'];



$movie=new Movie;
if(isset($_POST['story'])){
$story=$_POST['story'];
$movie->UpdateNewMovie($id,$title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,$name,$rate,$count,$Director,$prize,$story);
}
else{
    $movie->UpdateNewMovie($id,$title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,$name,$rate,$count,$Director,$prize,NULL);    
}

$movie->delet_genre_with_movieId($id);
$movie->delet_actor_with_movieId($id);
$movie->delet_company_with_movieId($id);

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
if($_POST['genre2']!= ''){

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
if($_POST['genre3']!=''){
    $genre3=$_POST['genre3'];
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
    $movie->addactortofilm($id,$actor2);
}
if(isset($_POST['actor3'])){
    $actor3=$_POST['actor3'];
    $movie->addactortofilm($id,$actor3);
}
$movie->addcompanytofilm($id,$company1);

if(isset($_POST['company2'])){
    $company2=$_POST['company2'];
    $movie->addcompanytofilm($id,$company2);
}
if(isset($_POST['company3'])){
    $company3=$_POST['company3'];
    $movie->addcompanytofilm($id,$company3);
}

}

//header("Location:../admin/admin.php?Admin_Name=$name");
?>