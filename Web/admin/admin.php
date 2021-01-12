<?php
include '../control.php';  // Using database connection file here
session_start();
$path = $_SESSION['path'];
$movie = new movie;
$reselt = $movie->getMovieforAdmin($path);
$data = mysqli_fetch_assoc($reselt);
$admin = new admin;

if ($_SESSION['type'] == 'admin') {
    $hearder = "../admin/admin.php";
    $addFilm = "../AddFilm/AddFilm.php";
    $addseries = "../AddSeries/AddSeries.php";
    $addseason = "../AddSeason/AddSeason.php";
    $addactor = "../AddActor/AddActor.html";
    $addchar = "../AddCharacter/AddCharacter.php";
    $addprize = "../AddPrize/AddPrize.php";
    $adddirector = "../AddDirector/Adddirector.html";
    $addadvert = "../AddAdvertisement/AddAdvertisement.html";
    $addnovel = "../AddNovel/AddNovel.html";
    $addcompany = "../AddCompany/AddCompany.html";
} else {
    $hearder = "../user/user.php";
    $addFilm = "../user/user.php";
    $addseries = "../user/user.php";
    $addseason = "../user/user.php";
    $addactor = "../user/user.php";
    $addchar = "../user/user.php";
    $addprize = "../user/user.php";
    $adddirector = "../user/user.php";
    $addadvert = "../user/user.php";
    $addnovel = "../user/user.php";
    $addcompany = "../user/user.php";
}

?>
<!DOCTYPE html>
<html style="height: 622px;background: url(&quot;assets/img/outer-space-background.jpg&quot;);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amita">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cherry+Swash">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chewy">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/NotflixButton.css">
    <link rel="stylesheet" href="assets/css/Notflixfooter.css">
    <link rel="stylesheet" href="assets/css/NotflixNavBar.css">
</head>

<body id="page-top" style="height: 526px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;margin-left: 0px;padding: 0px;background: rgba(49,23,54,0);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="padding: 4px;filter: hue-rotate(9deg);background: rgb(61,5,81);color: rgb(61,5,81);border-color: rgb(226,227,235);">
        <div class="container"><a class="navbar-brand logo" data-aos="flip-left" data-aos-duration="1450" href="#" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 28px;padding-top: 0px;padding-bottom: 0px;"><img src="assets/img/5027d5fc-d38c-4aba-ab1c-e41212bf9e10_200x200.png" style="margin-top: -1px;padding-top: 13px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><img src="assets/img/icons8-menu-64.png"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" style="font-size: 16px;"><a class="nav-link" href="http://localhost/NotFlix/Web/Home_movies/Movies.php" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="../log_out/log_out.php" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="text-center profile-card" style="margin: 15px;color: #858796;background: rgba(255,255,255,0);border-color: rgba(133,135,150,0);">
            <div style="margin-top: 94px;margin-right: 0px;">
                <div class="row" style="margin-right: 0px;">
                    <div class="col-auto" style="width: 300px;margin-right: 0px;margin-left: 0px;"><img src="../EditinfoPage/user_pics/<?= $_SESSION['image'] ?>"></div>
                    <div class="col-auto" style="margin-top: 30px;">
                        <h3 style="text-align: left;color: rgb(255,255,255);margin-bottom: 12px;font-size: 40px;"><?= $_SESSION['name'] ?></h3>
                        <h3 style="text-align: left;color: rgb(255,255,255);margin: 0px;margin-top: 0px;font-size: 25px;"><?= $_SESSION['email'] ?></h3>
                        <div class="row" style="padding:0;padding-bottom:10px;padding-top:20px;">
                            <div class="col-auto"><button class="btn btn-primary" type="button" style="background: #219bd7;text-align: center;margin-top: 5px;font-size: 20px;" onclick="window.location.href='../EditInfoPage/EditProfile.php';">Edit Info</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <h1 class="text-center mb-4" style="border-color: rgb(248,248,249);color: rgb(246,247,248);font-size: 30px;"><em>Film &amp; series &amp; Advertisement added</em><br></h1>
                <div class="filtr-controls text-center lead text-uppercase mb-3"><span class="active d-inline-block mx-3 py-1 position-relative" data-filter="all" style="color: rgb(252,252,254);">all </span><span class="d-inline-block mx-3 py-1 position-relative" data-filter="film" style="color: rgb(255,255,255);"><em>Film</em>&nbsp;</span><span class="d-inline-block mx-3 py-1 position-relative" data-filter="Series" style="color: rgb(255,255,255);"><em>Series</em>&nbsp;</span><span class="d-inline-block mx-3 py-1 position-relative" data-filter="Advertisement" style="color: rgb(252,252,255);"><em>Advertisement</em>&nbsp;</span></div>
                <div class="row filtr-container">
                    <?php

                    $records = $movie->getMovieforAdmin($_SESSION['name']);
                    while ($data = mysqli_fetch_array($records)) {
                        if (is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                        {
                            $data['POSTER'] = "assets/img/91SCNVEssVL._AC_SY741_.jpg";
                        }
                    ?>
                        <div class="col-md-6 col-lg-4 filtr-item" data-category="film">
                            <div class="card border-dark" style="color: rgb(176,179,204);background: rgba(255,255,255,0);">
                                <div class="card-header text-light" style="background: rgba(90,92,105,0);">
                                    <a href="../Movie_Page/Movie_page.php?id=<?= $data['ID'] ?>" rel="stylesheet" type="text/css">
                                        <h5 class="m-0" style="font-size: 26px;font-family: Almendra, serif;border-color: rgb(255,255,255);"><?= $data['NAME_MOVIE'] ?></h5>
                                    </a>
                                </div><a href="../Movie_Page/Movie_page.php?id=<?= $data['ID'] ?>" rel="stylesheet" type="text/css"><img class="img-fluid card-img w-100 d-block rounded-0" src=<?= $data['POSTER']; ?>></a>
                                <div class="card-body" style="background: linear-gradient(white 63%,rgb(151,189,255) 100%), rgb(255,255,255);color: rgb(1,5,41);">
                                    <p class="card-text" style="color: rgb(30,8,58);"><?= $data['DESCRIPTION_OF_MOVIE'] ?><br></p>
                                </div>
                                <div class="d-flex card-footer" style="background: rgb(151,189,255);"><button class="btn btn-dark btn-sm" data-bs-hover-animate="pulse" type="button" onclick="window.location.href='../EditFilm/EditFilm.php?id=<?= $data['ID'] ?>';" style="background: rgba(245,245,247,0);color: rgb(30,8,58);border-color: rgba(40,13,96,0);font-size: 18px;font-family: Almendra, serif;"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</button><button class="btn btn-outline-dark btn-sm ml-auto" data-bs-hover-animate="pulse" type="button" onclick="window.location.href='deleteFilm.php?id=<?= $data['ID'] ?>';" style="color: rgb(30,8,58);background: rgba(248,244,244,0);border-color: rgba(40,13,96,0);font-size: 18px;font-family: Almendra, serif;"><i class="fa fa-trash-o"></i>&nbsp;Delete</button></div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $series = new series;
                    $records = $series->get_all_for_admin($_SESSION['name']);
                    while ($data = mysqli_fetch_array($records)) {
                        if (is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                        {
                            $data['POSTER'] = "assets/img/91SCNVEssVL._AC_SY741_.jpg";
                        }
                    ?>
                        <div class="col-md-6 col-lg-4 filtr-item" data-category="Series">
                            <div class="card border-dark" style="color: rgb(176,179,204);background: rgba(255,255,255,0);">
                                <div class="card-header text-light" style="background: rgba(90,92,105,0);">
                                    <a href="../Series/Serie_page.php?id=<?= $data['ID'] ?> " rel="stylesheet" type="text/css">
                                        <h5 class="m-0" style="font-size: 26px;font-family: Almendra, serif;border-color: rgb(255,255,255);"><?= $data['NAME_SERIES'] ?></h5>
                                    </a>
                                </div><a href="../Series/Serie_page.php?id=<?= $data['ID'] ?> " rel="stylesheet" type="text/css"><img class="img-fluid card-img w-100 d-block rounded-0" src=<?php echo $data['POSTER']; ?>></a>
                                <div class="card-body" style="background: linear-gradient(white 63%, rgb(151,189,255) 100%), rgb(255,255,255);color: rgb(1,5,41);">
                                    <p class="card-text" style="color: rgb(30,8,58);"><?= $data['DESCRIPTION'] ?><br></p>
                                </div>
                                <div class="d-flex card-footer" style="background: rgb(151,189,255);"><button class="btn btn-dark btn-sm" data-bs-hover-animate="pulse" type="button" onclick="window.location.href='../EditSeries/EditSeries.php?id=<?= $data['ID'] ?>';" style="background: rgba(245,245,247,0);color: rgb(30,8,58);border-color: rgba(40,13,96,0);font-size: 18px;font-family: Almendra, serif;"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</button><button class="btn btn-outline-dark btn-sm ml-auto" data-bs-hover-animate="pulse" type="button" onclick="window.location.href='deleteSeries.php?id=<?= $data['ID'] ?>';" style="color: rgb(30,8,58);background: rgba(248,244,244,0);border-color: rgba(40,13,96,0);font-size: 18px;font-family: Almendra, serif;"><i class="fa fa-trash-o"></i>&nbsp;Delete</button></div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php

                    $advertisement = new advertisement;
                    $records = $advertisement->get_for_admin($_SESSION['name']);
                    while ($data = mysqli_fetch_array($records)) {
                    ?>
                        <div class="col-md-6 col-lg-4 filtr-item" data-category="Advertisement">
                            <div class="card border-dark" style="color: rgb(176,179,204);background: rgba(255,255,255,0);">
                                <div class="card-header text-light" style="background: rgba(90,92,105,0);">
                                    <h5 class="m-0" style="font-size: 26px;font-family: Almendra, serif;border-color: rgb(255,255,255);">Advertisement</h5>
                                </div><img class="img-fluid card-img w-100 d-block rounded-0" src="../AddAdvertisement/Addvertisements/<?= $data['PICTURE']; ?>">
                                <div class="card-body" style="background: linear-gradient(white 63%, rgb(151,189,255) 100%), rgb(255,255,255);color: rgb(1,5,41);">
                                    <p class="card-text" style="color: rgb(30,8,58);"><br></p>
                                </div>
                                <div class="d-flex card-footer" style="background: rgb(151,189,255);"><button class="btn btn-outline-dark btn-sm ml-auto" data-bs-hover-animate="pulse" type="button" onclick="window.location.href='deleteAdvertisement.php?id=<?= $data['ID'] ?>';" style="color: rgb(30,8,58);background: rgba(248,244,244,0);border-color: rgba(40,13,96,0);font-size: 18px;font-family: Almendra, serif;"><i class="fa fa-trash-o"></i>&nbsp;Delete</button></div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            
            </div>

        </section>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Film</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><a href="<?= $addFilm ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Series</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><a href="<?= $addseries ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Novel</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><a href="<?= $addnovel ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Season</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><a href="<?= $addseason ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Actor</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><a href="<?= $addactor ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Character</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><a href="<?= $addchar ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Prize</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><a href="<?= $addprize ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Director</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><a href="<?= $adddirector ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Advertisement</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><a href="<?= $addadvert ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Company</span></div>
                    <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><a href="<?= $addcompany ?>"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;">
                                <defs>
                                    <linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1">
                                        <stop offset="0" stop-color="#c8b8f8"></stop>
                                        <stop offset="1" stop-color="#d08abc"></stop>
                                    </linearGradient>
                                    <linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                    <linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3">
                                        <stop offset="0" stop-color="#7a51ef"></stop>
                                        <stop offset="1" stop-color="#a7438b"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g>
                                        <path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path>
                                        <path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path>
                                        <path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path>
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer" style="background: rgb(154,59,128);">
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>