<?php
include '../control.php';  // Using database connection file here
$name=filter_input(INPUT_GET,'Admin_Name',FILTER_SANITIZE_NUMBER_INT);
$movie=new movie;
$reselt=$movie->getMovieforAdmin($name);
$data=mysqli_fetch_assoc($reselt);

?>

<!DOCTYPE html>
<html style="height: 622px;background: url(&quot;assets/img/outer-space-background.jpg&quot;);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
                    <li class="nav-item" style="font-size: 16px;"><a class="nav-link" href="product-page.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href= "#footer" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="product-page.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Log out</a></li>
                </ul><a class="d-lg-flex justify-content-lg-center align-items-lg-center" href="#" style="margin-top: 0px;margin-left: 21px;"><span style="font-family: Acme, sans-serif;font-size: 18px;">Donya Esawi</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg" style="width: 50px;margin-left: 5px;"></a>
            </div>
        </div>
    </nav>
    <main>
        <section class="d-inline-flex">
            <div class="container-fluid" style="margin-top: 98px;">
                <div class="text-center d-sm-flex justify-content-between justify-content-lg-start mb-4"><span style="color: rgb(240,240,245);font-size: 26px;margin-top: 20px;"><em>Film &amp; series added</em><br></span></div>
                <div class="row no-gutters"> 

                <?php
                        
                    $records=$movie->get_all();
                    while($data = mysqli_fetch_array($records)){
                        if(is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                        {
                            $data['POSTER']="assets/img/91SCNVEssVL._AC_SY741_.jpg";
                        }
                    ?>
                      
                        <div class="col-auto d-xl-flex justify-content-xl-start" style="width: 580px;">
                        <div class="card shadow d-xl-flex justify-content-xl-start border-left-primary py-2" data-aos="fade-up" style="background: linear-gradient(rgba(0,0,0,0), rgba(255,255,255,0)), rgb(61,135,222);border-color: var(--dark);width: 500px;margin: 20px;">
                            <div class="card-body d-xl-flex justify-content-xl-start" style="width: 500px;">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto"><img class="border rounded img-profile" src=<?php echo $data['POSTER']; ?> style="width: 100px;height: 100px;border-color: rgb(187,3,191);box-shadow: 0px 0px;" width="200" height="200"></div>
                                    <div class="col-auto">
                                        <div class = "row">
                                        <div class="col mr-2">
                                            <div class="text-dark font-weight-bold h5 mb-0" style="margin: 10px;font-size: 35px;"><span style="color: rgb(154,59,128);"><?=$data['NAME_MOVIE'] ?></span></div>
                                        </div>
                                    </div>
                                        <div class = "row">
                                        <div class="col-auto"><a class="icons8-edit" data-bs-hover-animate="pulse" href="../EditFilm/EditFilm.php?id=<?=$data['ID']?>"rel="stylesheet" type="text/css"></a></div>
                                        <div class="col-auto"><a class="icons8-trash" data-bs-hover-animate="pulse" href="delete.php?id=<?= $data['ID'] ?>"rel="stylesheet" type="text/css"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    
                <?php } ?>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Movie</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Series</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Novel</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Season</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Actor</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Character</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Prize</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;margin-right: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col text-right" data-aos="fade-up" style="margin: 20px;margin-left: 20px;"><span style="color: rgb(245,245,249);font-size: 26px;">Add New Director</span></div>
                            <div class="col-1 text-left" data-aos="fade-up" style="margin: 20px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="64" height="64"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="88.6875" y1="54.75781" x2="88.6875" y2="73.95194" gradientUnits="userSpaceOnUse" id="color-1_48133_gr1"><stop offset="0" stop-color="#c8b8f8"></stop><stop offset="1" stop-color="#d08abc"></stop></linearGradient><linearGradient x1="86" y1="25.08244" x2="86" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-2_48133_gr2"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient><linearGradient x1="126.3125" y1="25.08244" x2="126.3125" y2="144.75144" gradientUnits="userSpaceOnUse" id="color-3_48133_gr3"><stop offset="0" stop-color="#7a51ef"></stop><stop offset="1" stop-color="#a7438b"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M88.6875,56.4375c-4.4528,0 -8.0625,3.6097 -8.0625,8.0625c0,4.4528 3.6097,8.0625 8.0625,8.0625c4.4528,0 8.0625,-3.6097 8.0625,-8.0625c0,-4.4528 -3.6097,-8.0625 -8.0625,-8.0625z" fill="url(#color-1_48133_gr1)"></path><path d="M142.4375,86h-8.0625v-51.0625c0,-4.44513 -3.61738,-8.0625 -8.0625,-8.0625h-102.125c-4.44513,0 -8.0625,3.61737 -8.0625,8.0625v72.5625v2.6875v10.75c0,4.44512 3.61469,8.0625 8.0625,8.0625h72.5625v2.6875c0,7.40944 6.02806,13.4375 13.4375,13.4375h32.25c7.40944,0 13.4375,-6.02806 13.4375,-13.4375v-32.25c0,-7.40944 -6.02806,-13.4375 -13.4375,-13.4375zM21.5,34.9375c0,-1.48081 1.204,-2.6875 2.6875,-2.6875h102.125c1.4835,0 2.6875,1.20669 2.6875,2.6875v51.0625h-5.375v-43c0,-2.96431 -2.41338,-5.375 -5.375,-5.375h-86c-2.96431,0 -5.375,2.41069 -5.375,5.375v59.125c0,2.96431 2.41069,5.375 5.375,5.375h64.5v5.375h-72.5625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-2.6875zM96.75,99.4375v2.6875h-29.69956c-1.32494,-18.60019 -15.98794,-33.47819 -34.80044,-34.80044v-24.32456h86v43h-8.0625c-7.40944,0 -13.4375,6.02806 -13.4375,13.4375zM32.25,94.44413c2.6875,0.97825 6.70262,3.92106 7.68088,7.68087h-7.68087zM45.44294,102.125c-1.13681,-6.73756 -5.13044,-12.05612 -13.19294,-13.19562v-5.43144c10.75,1.21744 17.40694,8.91981 18.62438,18.62706zM56.30044,102.125c-1.26581,-12.67694 -10.61294,-22.78731 -24.05044,-24.05044v-5.375c16.125,1.30075 28.12738,13.78687 29.42544,29.42544zM24.1875,123.625c-1.4835,0 -2.6875,-1.20669 -2.6875,-2.6875v-3.182c0,0.301 1.73881,0.4945 2.6875,0.4945h72.5625v5.375zM150.5,131.6875c0,4.44512 -3.61738,8.0625 -8.0625,8.0625h-32.25c-4.44512,0 -8.0625,-3.61738 -8.0625,-8.0625v-2.6875v-5.375v-5.375v-5.375v-5.375v-5.375v-2.6875c0,-4.44512 3.61469,-8.0625 8.0625,-8.0625h32.25c4.44512,0 8.0625,3.61738 8.0625,8.0625z" fill="url(#color-2_48133_gr2)"></path><path d="M129,102.125h-5.375v10.75h-10.75v5.375h10.75v10.75h5.375v-10.75h10.75v-5.375h-10.75z" fill="url(#color-3_48133_gr3)"></path></g></g></svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>