<?php
// Include the database configuration file
include '../control.php';

session_start();
// File upload path
$targetDir = "Addvertisements/";
$fileName = basename($_FILES["avatar-file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["avatar-file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["avatar-file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $advertisment=new advertisement;
            $advertisment->Addnew($_SESSION['name'],$fileName);
        }
    }else{
        echo "<script> alert(' only JPG, JPEG, PNG &GIF files are allowed to upload.');  window.location.href='AddAdvertisement.php';</script>";
    }
}

header("Location:AddAdvertisement.php");


?>