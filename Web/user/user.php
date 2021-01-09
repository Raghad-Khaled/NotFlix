<?php
include '../control.php';  // Using database connection file here
$path = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
$user = new user;
session_start();
$_SESSION['path']=$path;
if($_SESSION['type'] == 'admin')
$hearder = "../admin/admin.php?name=";
else
$hearder = "../user/user.php?name=";

?>
<!DOCTYPE html>
<html style="height: 622px;background: rgb(33,33,46);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Cards-with-Hover-Effect-50.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/movie_Card.css">
    <link rel="stylesheet" href="assets/css/NotflixButton.css">
    <link rel="stylesheet" href="assets/css/Notflixfooter.css">
    <link rel="stylesheet" href="assets/css/NotflixNavBar.css">
    <link rel="stylesheet" href="assets/css/Profile-Card-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Responsive-News-Card-Slider-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-News-Card-Slider.css">
</head>

<body id="page-top" style="height: 526px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;margin-left: 0px;padding: 0px;background: rgba(49,23,54,0);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="padding: 4px;filter: hue-rotate(9deg);background: rgb(61,5,81);color: rgb(61,5,81);border-color: rgb(226,227,235);">
        <div class="container"><a class="navbar-brand logo" data-aos="flip-left" data-aos-duration="1450" href="#" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 28px;padding-top: 0px;padding-bottom: 0px;"><img src="assets/img/5027d5fc-d38c-4aba-ab1c-e41212bf9e10_200x200.png" style="margin-top: -1px;padding-top: 13px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><img src="assets/img/icons8-menu-64.png"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" style="font-size: 16px;"><a class="nav-link" href="http://localhost/NotFlix/Web/Home_movies/Movies.php" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href=#footer style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="../SignIn/SignIn.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="height: 499px;">
        <div class="text-center profile-card" style="margin: 15px;color: #858796;background: rgba(255,255,255,0);border-color: rgba(133,135,150,0);">
            <div style="margin-top: 94px;margin-right: 0px;">
                <div class="row" style="margin-right: 0px;">
                    <div class="col-auto" style="width: 300px;margin-right: 0px;margin-left: 0px;"><img class="img-thumbnail d-xl-flex align-items-xl-start" style="margin-top: 0px;text-align: right;" src="../EditinfoPage/user_pics/<?= $_SESSION['image'] ?>" height="150px"></div>
                    <div class="col-auto" style="margin-top: 30px;">
                        <h3 style="text-align: left;color: rgb(255,255,255);margin-bottom: 12px;font-size: 40px;"><?= $_SESSION['name'] ?></h3>
                        <h3 style="text-align: left;color: rgb(255,255,255);margin: 0px;margin-top: 0px;font-size: 25px;"><?= $_SESSION['email'] ?></h3>
                        <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
                            <div class="col-auto"><button class="btn btn-primary" type="button" style="background: #219bd7;text-align: center;margin-top: 5px;font-size: 20px;" onclick="window.location.href='../EditInfoPage/EditProfile.php?name=<?= $path ?>';">Edit Info</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <h1 class="text-center mb-4" style="color: rgb(255,255,255);font-family: Cookie, cursive;font-size: 50px;">Favorites</h1>
                <div class="filtr-controls text-center lead text-uppercase mb-3"><span class="active d-inline-block mx-3 py-1 position-relative" data-filter="all" style="color: rgb(255,255,255);font-family: Cookie, cursive;font-size: 30px;">all </span><span class="d-inline-block mx-3 py-1 position-relative" data-filter="1" style="font-family: Cookie, cursive;font-size: 30px;color: rgb(255,255,255);">movies&nbsp;</span><span class="d-inline-block mx-3 py-1 position-relative" data-filter="2" style="color: rgb(255,255,255);font-size: 30px;font-family: Cookie, cursive;">series&nbsp;</span></div>
                <div class="row filtr-container">
                    <?php

                    $records = $user->get_Movie_fav($_SESSION['name'] );
                    while ($data = mysqli_fetch_array($records)) {
                        if (is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                        {
                            $data['POSTER'] = "assets/img/91SCNVEssVL._AC_SY741_.jpg";
                        }
                    ?>
                        <div class="col-md-6 col-lg-4 filtr-item" data-category="1">
                            <div class="card border-dark" data-aos="fade-up" style="color: rgb(176,179,204);background: rgba(255,255,255,0);">
                                <div class="card-header text-light" style="background: rgba(90,92,105,0);">
                                    <div class="row">
                                        <div class="col">
                                        <a href="../Movie_Page/Movie_page.php?id=<?= $data['ID'] ?>&name=<?= $path ?>" rel="stylesheet" type="text/css">
                                            <h5 class="m-0" style="font-size: 26px;font-family: Almendra, serif;border-color: rgb(255,255,255);"><?= $data['NAME_MOVIE'] ?></h5>
                                        </a>
                                        </div>
                                        <div class="col-auto" style="text-align: right;"><a href="removeFilmFromfavorite.php?id=<?= $data['ID'] ?>" rel="stylesheet" type="text/css"><img data-bs-hover-animate="tada" src="assets/img/icons8-star-64.png" style="width: 35px;margin-left: 14px;text-align: right;"></div>
                                    </div>
                                </div><a href="../Movie_Page/Movie_page.php?id=<?= $data['ID'] ?>&name=<?= $path ?> " rel="stylesheet" type="text/css"><img class="img-fluid card-img w-100 d-block rounded-0" src=<?php echo $data['POSTER']; ?>></a>
                                <div class="card-body" style="background: radial-gradient(rgb(255,255,255) 0%, white 61%, rgb(151,189,255) 100%), rgb(255,255,255);color: rgb(1,5,41);">
                                    <p class="card-text" style="color: rgb(30,8,58);"><?= $data['DESCRIPTION_OF_MOVIE'] ?><br></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php

                    $records = $user->get_Series_fav( $_SESSION['name'] );
                    while ($data = mysqli_fetch_array($records)) {
                        if (is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                        {
                            $data['POSTER'] = "assets/img/91SCNVEssVL._AC_SY741_.jpg";
                        }
                    ?>
                        <div class="col-md-6 col-lg-4 filtr-item" data-category="2">
                            <div class="card border-dark" data-aos="fade-up" style="color: rgb(176,179,204);background: rgba(255,255,255,0);">
                                <div class="card-header text-light" style="background: rgba(90,92,105,0);">
                                    <div class="row">
                                        <div class="col">
                                            <a href="../Series/Serie_page.html?id=<?= $data['ID'] ?>&name=<?= $path ?> " rel="stylesheet" type="text/css">
                                                <h5 class="m-0" style="font-size: 26px;font-family: Almendra, serif;border-color: rgb(255,255,255);"><?= $data['NAME_SERIES'] ?></h5>
                                            </a>
                                        </div>
                                        <div class="col-auto" style="text-align: right;"><a href="removeSeriesFromfavorite.php?id=<?= $data['ID'] ?> " rel="stylesheet" type="text/css"><img data-bs-hover-animate="tada" src="assets/img/icons8-star-64.png" style="width: 35px;margin-left: 14px;text-align: right;"></a></div>
                                    </div>
                                </div><a href="../Series/Serie_page.html?id=<?= $data['ID'] ?>&name=<?= $path ?> " rel="stylesheet" type="text/css"><img class="img-fluid card-img w-100 d-block rounded-0" src=<?php echo $data['POSTER']; ?>></a>
                                <div class="card-body" style="background: radial-gradient(rgb(255,255,255) 0%, white 61%, rgb(151,189,255) 100%), rgb(255,255,255);color: rgb(1,5,41);">
                                    <p class="card-text" style="color: rgb(30,8,58);"><?= $data['DESCRIPTION'] ?><br></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
        <footer id="footer" style="background: #994ebc;height: 146px;">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#" style="font-size: 37px;font-family: Cookie, cursive;">NOT&nbsp;&nbsp;<span style="color: rgb(97,154,254);">flix</span></a></h3>
                    <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                    <p class="company-name">CMP © 2023</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div class="d-lg-flex justify-content-lg-end align-items-lg-end"><img class="d-lg-flex" src="assets/img/icons8-address-64.png">
                        <p class="text-left d-lg-flex justify-content-lg-center align-items-lg-center" style="font-size: 14px;font-family: Montserrat, sans-serif;"> Cairo University Rd, Oula, Giza District, Giza Governorate </p>
                    </div>
                    <div class="d-lg-flex align-items-lg-center"><img src="assets/img/icons8-phone-64.png" style="width: 41px;height: 40px;">
                        <p class="d-lg-flex footer-center-info email text-left" style="font-family: Montserrat, sans-serif;margin-left: 23px;margin-top: 7px;"> +1 141992110</p>
                    </div>
                    <div class="d-flex d-lg-flex align-items-center align-items-lg-center"><img src="assets/img/icons8-envelope-64.png" style="width: 42px;height: 42px;">
                        <p style="margin-top: 7px;margin-left: 0px;"> <a href="#" target="_blank">donya.esawi@gmail.com</a></p>
                        <p> </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the Team</h4>
                    <p>&nbsp;2nd year grade students in CMP department main stream in faculty of engineering cairo university</p>
                    <div class="d-flex justify-content-center social-links social-icons"><a href="#"><img src="assets/img/icons8-facebook-64.png" style="width: 36px;"></a><a href="#"><img src="assets/img/icons8-twitter-64.png" style="width: 36px;"></a><a href="#"><img src="assets/img/icons8-linkedin-64.png" style="width: 36px;"></a><a href="#"><img src="assets/img/icons8-github-64.png" style="width: 36px;"></a></div>
                </div>
            </div>
        </footer>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Responsive-News-Card-Slider.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>