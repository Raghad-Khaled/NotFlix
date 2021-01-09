<?php
   include '../control.php';
   $path = $_SESSION['path'];

   //$name="Raghad_Khaled";
   $user_obj=new user;
   $name=$user_obj->GetnameWithpass($path);
   $temp=$user_obj->get_user_info($name);
   $data=mysqli_fetch_assoc($temp);
                                        
 if(isset($_POST['Save_Information']))
{
                                        
                                        
    $email=$_POST['email'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $user_obj->edit_user_email($name,$email);
    $user_obj->edit_user_password($name,$password);
    $user_obj->edit_user_age($name,$age);   
    $redirection_string="Location: EditProfile.php?name=$path";
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
                $user_obj->edit_user_image($name,$fileName);
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