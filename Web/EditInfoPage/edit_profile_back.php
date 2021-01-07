<?php
   include '../control.php';
   $name = filter_input(INPUT_GET, 'user_name', FILTER_SANITIZE_STRING);
   $name="Raghad_Khaled";
   $user_obj=new user;
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
    
    // File upload path
    $targetDir = "user_pics/";
    $fileName = basename($_FILES["avatar-file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


    if(  !empty($_FILES["avatar-file"]["name"]) )
    {
        echo "PICTURE IS NWOWWWWWWWWWWW";
            // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes))
        {
            // Upload file to server
            if(move_uploaded_file($_FILES["avatar-file"]["tmp_name"], $targetFilePath))
            {
                $user_obj->edit_user_image($user_name,$fileName);
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
    
   // header("Location: EditProfile.php");
//exit();
                                                                                
 ?>