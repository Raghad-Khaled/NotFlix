<?php
include '../control.php';  // Using database connection file here
$name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_NUMBER_INT);
$movie=new movie;

?>
<!DOCTYPE html>
<html style="height: 622px;background: rgb(33,33,46);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/movie_Card.css">
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
                    <li class="nav-item"><a class="nav-link" href= #footer style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="product-page.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Log out</a></li>
                </ul><a class="d-lg-flex justify-content-lg-center align-items-lg-center" href="#" style="margin-top: 0px;margin-left: 21px;"><span style="font-family: Acme, sans-serif;font-size: 18px;">Donya Esawi</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg" style="width: 50px;margin-left: 5px;"></a>
            </div>
        </div>
    </nav>
    <main>
        <section class="d-inline-flex">
            <div class="container-fluid" style="margin-top: 98px;">
                <div class="text-center d-sm-flex justify-content-between justify-content-lg-start mb-4"><span style="color: rgb(240,240,245);font-size: 50px;margin-top: 20px;font-family: Cookie, cursive;">Favourites</span></div>
                <div class="row no-gutters">
                <?php
                        
                        $records=$movie->get_all_fav($name);
                        var_dump($records);
                        while($data = mysqli_fetch_array($records)){
                            if(is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                            {
                                $data['POSTER']="assets/img/91SCNVEssVL._AC_SY741_.jpg";
                            }
                        ?>
                    <div class="col-auto d-xl-flex justify-content-xl-start" style="width: 580px;">
                        <div class="card shadow d-xl-flex justify-content-xl-start border-left-primary py-2" data-aos="fade-up" style="background: linear-gradient(#bd11fa, #46c2ff), rgb(61,135,222);border-color: var(--dark);width: 500px;margin: 20px;margin-left: 20px;">
                            <div class="card-body d-xl-flex justify-content-xl-start" style="width: 500px;border-radius: 0px;">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto"><img class="border rounded img-profile" src=<?php echo $data['POSTER']; ?> style="width: 100px;height: 100px;border-color: rgb(187,3,191);box-shadow: 0px 0px;" width="200" height="200"></div>
                                    <div class="col mr-2">
                                        <div class="text-dark font-weight-bold h5 mb-0" style="margin: 10px;font-size: 35px;"><span style="color: rgb(33,33,46);border-color: rgb(33,33,46);"><?=$data['NAME_MOVIE'] ?></span></div>
                                    </div>
                                    <div class="col-auto"><a href="removeFromfavorite.php?id=<?= $data['ID'] ?> &name=<?= $name ?> "rel="stylesheet" type="text/css"><img data-bs-hover-animate="tada" src="assets/img/icons8-star-64.png" style="width: 35px;margin-left: 14px;"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>