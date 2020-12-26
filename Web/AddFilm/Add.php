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
$actor1=$_POST['actor1'];


echo $postar ;
echo $title ;
echo $year ;
echo $duration ;
echo $budget ;
echo $revenue; 
echo $rate ;
echo $count ;
echo $link ;
echo $actor1 ;



$genre1=$_POST['genre1'];


$company1=$_POST['company1'];



$language=$_POST['language'];
$Director=$_POST['Director'];
$story=$_POST['story'];
$prize=$_POST['prize'];
$description=$_POST['description'];

echo $genre1; 

echo $company1;

echo $language; 
echo $Director; 
echo $story; 
echo $prize;
echo $description;

$movie=new Movie;
$movie->InsertNewMovie($title,$year,$duration,$description,$language,$revenue,$budget,$link,$postar,"Raghad",$rate,$count,$Director,$prize,$story);
$IDrow=$movie->getid($title);
$data = mysqli_fetch_array($IDrow);
$ID = $data['ID'];
$movie->addgenretofilm($ID,$genre1);

if(isset($_POST['genre2'])){

    $genre2=$_POST['genre2'];
    $movie->addgenretofilm($ID,$genre2);
}
if(isset($_POST['genre3'])){
    $genre2=$_POST['genre3'];
    $movie->addgenretofilm($ID,$genre3);
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