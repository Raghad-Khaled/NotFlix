<?php
   include '../control.php';
   $path = $_SESSION['path'];

                                        
 if(isset($_POST['Save_Information']))
{
                                        
                                        
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $user_obj->edit_user_email($_SESSION['name'],$email);
    $user_obj->edit_user_password($_SESSION['name'],$password);
    $user_obj->edit_user_age($_SESSION['name'],$age);   
    $redirection_string="Location: EditProfile.php";
    // File upload path
    $targetDir = "user_pics/";
    $fileName = basename($_FILES["avatar-file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


    if(  !empty($_FILES["avatar-file"]["name"]) )
    {
       // echo "PICTURE IS NWOWWWWWWWWWWW";
            // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes))
        {
            // Upload file to server
            if(move_uploaded_file($_FILES["avatar-file"]["tmp_name"], $targetFilePath))
            {
                $user_obj->edit_user_image($_SESSION['name'],$fileName);
                // Insert image file name into database
            //  $advertisment=new advertisement;
            //  $advertisment->Addnew("RoRo123",$fileName);
            }
        }
        else
        {
            echo "<script> alert(' only JPG, JPEG, PNG &GIF files are allowed to upload.');  window.location.href='EditProfile.php';</script>";
        }
    }

    } 
    
    header($redirection_string);
    exit();
                                                                                
 ?>