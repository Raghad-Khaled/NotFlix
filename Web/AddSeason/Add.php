<?php
include '../control.php';
if(isset($_POST['submit']))
{
    $seriesid=$_POST['series'];
    $number=$_POST['number'];
    $poster=$_POST['poster'];
    $link=$_POST['link'];

    $series=new series;
    $series->addseason($seriesid,$number,$poster,$link);


}

?>