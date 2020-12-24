<?php

include '../control.php';
if(isset($_POST['submit']))
{


$postar= $_POST['postar'];
$title=$_POST['title'];
$year=$_POST['year'];
$year=substr($year,0,4);
$duration=$_POST['duration'];
$buget=$_POST['buget'];
$revenue=$_POST['revenue'];
$rate=$_POST['rate'];
$count=$_POST['count'];
$link=$_POST['link'];
$actor1=$_POST['actor1'];
if(isset($_POST['actor2'])){
    echo $actor2 ;
}
$actor3=$_POST['actor3'];
echo $postar ;
echo $title ;
echo $year ;
echo $duration ;
echo $buget ;
echo $revenue; 
echo $rate ;
echo $count ;
echo $link ;
echo $actor1 ;


echo $actor3 ;
$genre1=$_POST['genre1'];
$genre2=$_POST['genre2'];
$genre3=$_POST['genre3'];

$company1=$_POST['company1'];
$company2=$_POST['company2'];
$company3=$_POST['company3'];


$language=$_POST['language'];
$Director=$_POST['Director'];
$story=$_POST['story'];
$prize=$_POST['prize'];
$description=$_POST['description'];

echo $genre1; 
echo $genre2;
echo $genre3; 
echo $company1;
echo $company2; 
echo $company3; 
echo $language; 
echo $Director; 
echo $story; 
echo $prize;
echo $description;


}

?>