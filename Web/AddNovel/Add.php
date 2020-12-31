<?php
include '../control.php';
if(isset($_POST['submit']))
{
$postar= $_POST['postar'];
$title=$_POST['title'];
$author=$_POST['Author'];
$Overview=$_POST['Overview'];



$story=new story;
$story->InsertStory($title,$author,$postar,$Overview);


}    

?>