<?php

include '../control.php';
$name = filter_input(INPUT_GET, 'user_name', FILTER_SANITIZE_STRING);
$name="Raghad_Khaled";
$user_obj=new user;
$temp=$user_obj->get_user_info($name);
$data=mysqli_fetch_assoc($temp);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barrio">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Inline">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Shade">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Finger+Paint">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Freckle+Face">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
</head>

<body class="bg-gradient-primary" style="background: linear-gradient(#bd11fa, #46c2ff 100%), #46c2ff;">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 4px;box-shadow: 0px 0px;">
            <div class="col-md-9 col-lg-12 col-xl-10" style="box-shadow: 0px 0px;">
                <div class="card shadow-lg o-hidden border-0 my-5" style="background: rgb(33,33,46);box-shadow: inset 0px 0px 0px;">
                    <div class="card-body p-0" style="box-shadow: inset 0px 0px 20px 3px #5f6ef8;">
                        <div class="row" style="box-shadow: 0px 0px;">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background: url(assets/img/img.png) center / cover no-repeat;box-shadow: 0px 0px;">
                                    <div style="margin-top: 2px;">
                                        <h1 class="d-lg-flex justify-content-lg-center" data-aos="flip-left" style="margin-top: 75px;background: rgb(33,33,46);border-radius: 54px;width: 249px;margin-left: 115px;color: rgb(123,105,243);padding-top: 8px;border-style: dotted;border-color: rgb(149,70,246);font-size: 35px;box-shadow: inset 0px 0px 3px;font-family: 'Bungee Inline', cursive;padding-bottom: 8px;">Edit Info</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="avatar" style="margin-top: -10px;">
                                        <div class="avatar-bg center" style="margin-bottom: 12px;border-style: none;box-shadow: 0px 0px 10px rgb(47,168,255);"></div><input class="d-lg-flex align-items-lg-center form-control" type="file" data-aos="zoom-in-right" name="avatar-file" style="padding-top: 4px;padding-right: 0px;padding-left: 7px;padding-bottom: 1px;color: var(--secondary);background: rgba(255,255,255,0);border-radius: 6px;box-shadow: inset 0px 0px 5px 0px rgb(124,106,246);margin-bottom: 2px;height: 40px;border: 1.5px dashed rgb(91,103,194);margin-top: 7px;">
                                    </div>
                                    <div class="text-center">
                                        <h3 class="pulse animated" style="color: rgb(143,85,251);font-family: 'Caveat Brush', cursive;margin-top: 4px;margin-bottom: 12px;">Donia_Esawi</h3>
                                    </div>
                                    <form action= "EditProfile.php"  method="Post">
                                        <div class="form-group"><input class="form-control form-control-user"  type="email" data-aos="zoom-in-left" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter New Email Address..." name="email" inputmode="email" multiple="" style="box-shadow: 0px 0px 12px #6f58fe;"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" data-aos="zoom-in-right" id="exampleInputPassword" placeholder="Enter New Password" name="password" style="box-shadow: 0px 0px 12px #6f58fe;"></div>
                                        <div class="form-group d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center align-items-xl-center" style="padding: 4px;">
                                        <input class="form-control" type="number" data-aos="zoom-in-left" name="age" laceholder="AGE" min="1" max="100" step="1" style="width: 111px;"><label style="margin-left: 12px;margin-bottom: 0px;">Gender:&nbsp;</label><?php echo $data['GENDER'];?><label style="margin-left: 3px;margin-bottom: 0px;color: rgb(118,117,249);"><?php?></label></div>
                                        <button class="btn btn-primary btn-block text-white btn-user" data-bs-hover-animate="pulse" type="submit" name="Save_Information" style="background: rgb(149,70,246);box-shadow: 0px 0px 12px #6f58fe;border-width: 0;">Save Information</button>
                                        <hr style="margin-bottom: 0px;">
                                        <?php
                                        
                                        
                                        if(isset($_POST['Save_Information']))
                                        {
                                        
                                        
                                        $email=$_POST['email'];
                                        $password=$_POST['password'];
                                        $age=$_POST['age'];
                                        $user_obj->edit_user_email($name,$email);
                                        $user_obj->edit_user_password($name,$password);
                                        $user_obj->edit_user_age($name,$age);                                        
                                        }                              
                                                                                
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>