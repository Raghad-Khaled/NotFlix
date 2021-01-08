<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$path=filter_input(INPUT_GET,'name',FILTER_SANITIZE_STRING);
$story=new story;
$reselt=$story->getstorywithId($id);
$data=mysqli_fetch_assoc($reselt);
$user = new user;
$name=$user->GetnameWithpass($path);

$moviesRelated=$story->getmovieRelated($id);
$chracter=$story->getCharacterRelated($id);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amarante">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Balsamiq+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Biryani">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chelsea+Market">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/FontAwesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/css/--mp---Multiple-items-slider-responsive.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Gallery-with-Lightbox-BS4-.css">
    <link rel="stylesheet" href="assets/css/3D-SLIDER-1.css">
    <link rel="stylesheet" href="assets/css/3D-SLIDER.css">
    <link rel="stylesheet" href="assets/css/carddd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Media-Slider-Bootstrap-3-1.css">
    <link rel="stylesheet" href="assets/css/Media-Slider-Bootstrap-3.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Notflixfooter.css">
    <link rel="stylesheet" href="assets/css/Responsive-News-Card-Slider-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-News-Card-Slider.css">
    <link rel="stylesheet" href="assets/css/Review-rating-Star-Review-Button-1.css">
    <link rel="stylesheet" href="assets/css/Review-rating-Star-Review-Button.css">
    <link rel="stylesheet" href="assets/css/ReviewCard.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom-1.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom-2.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-1.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/User-Rating-F19690.css">
</head>

<body style="background: linear-gradient(#bd11fa, #46c2ff);">
     <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="padding: 4px;filter: hue-rotate(9deg); height: 67px">
        <div class="container"><a class="navbar-brand logo" data-aos="flip-left" data-aos-duration="1450" href="../Home_movies/Movies.php" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 28px;padding-top: 0px;padding-bottom: 0px;"><img src="assets/img/5027d5fc-d38c-4aba-ab1c-e41212bf9e10_200x200.png" style="margin-top: -1px;padding-top: 13px; height: 60px"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><img src="assets/img/icons8-menu-64.png" style="height: 50px"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" style="font-size: 16px;"><a href="../Home_movies/Movies.php" class="nav-link active" href="product-page.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a href="#footer" class="nav-link active" href="product-page.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="../SignIn/SignIn.html" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px; ">Log out</a></li>
                </ul><a class="d-flex justify-content-lg-center align-items-lg-center" href="#" style="margin-top: 0px;margin-left: 0px;"><span class="d-flex align-items-center" style="font-family: Acme, sans-serif;font-size: 18px;"><?=$name?><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg" style="width: 50px;margin-left: 5px;"></span></a>
            </div>
        </div>
    </nav>
    <main class="page product-page" style="color: rgb(255,255,255);font-size: 24px;">
        <section class="clean-block clean-product dark" style="background: linear-gradient(#bd11fa, #46c2ff);">
            <div class="container">
                <div class="d-xl-flex justify-content-xl-center align-items-xl-center block-heading"><button class="btn btn-primary text-center d-xl-flex justify-content-xl-center align-items-xl-center" data-bs-hover-animate="pulse" type="button" style="height: 104px;border-radius: 584px;background: rgb(33,33,46);box-shadow: 0px 0px 20px rgb(33,33,46);border-width: 0px;border-bottom: 0px none rgba(0,123,255,0);margin-bottom: 35px;"><a href="#"><img src="assets/img/5027d5fc-d38c-4aba-ab1c-e41212bf9e10_200x200.png" style="margin-top: 11px;filter: hue-rotate(17deg);"></a></button></div>
                <div class="block-content" style="background: rgb(33,33,46);box-shadow: 0px 0px 60px rgb(45,45,68);">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery" style="background: rgba(135,73,237,0.32);box-shadow: inset 0px 0px 17px #af5eee;border-radius: 6px;"><a href=""><img src="<?=$data['POSTER'] ?>" style="width: 100%;height: 100%;"></a></div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h4 style="font-family: Acme, sans-serif;font-size: 32px; margin-bottom: 30px"><?=$data['STORY_NAME'] ?>   <img src="assets/img/book.png" style="height: 40px ; width: 40px; padding-top:5px;"></h4>
                                    
                                    <div>
                                        <h4 style="margin-top: 22px;font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed; margin-left: 15px">Story Overview <img src="assets/img/description.png" style="height: 45px ; width: 40px; padding-top:5px;"></h4>
                                    </div>
                                    <div class="summary">
                                        <p style="margin-left: 22px;color: rgba(255,255,255,0.97);font-size: 16px;margin-bottom: 16px;font-family: Nunito, sans-serif;"><?=$data['Overview'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div style="border-style: none;padding-right: 50px;padding-left: 50px;">
                            <h2 style="font-size: 42px;font-family: Acme, sans-serif;margin-bottom: 20px;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Author</h2>
                            <div class="row d-xl-flex">
                               
                                <div class="col-md-7 d-lg-flex m-auto align-items-lg-center justify-content-xl-start"><a >
                                        <h4 style="font-size: 34px;font-family: 'Chelsea Market', cursive;margin-top: 0px;">Louisa May Alcott</h4>
                                    </a></div>
                            </div>
                        </div>
                       

                         <div class="row" style="padding-right: 50px;padding-left: 50px;">
                            <div class="col">
                                <div style="margin-top: 22px;">
                                    <h2 style="font-size: 42px;font-family: Acme, sans-serif;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Characters Related <img src="assets/img/char.png" style="height: 50px padding-top:5px;"></h2>
                                      <div class="row no-gutters row-cols-3 justify-content-center align-items-center" style="  padding: 0px;margin-top: 25px;">
                            <!--------------Repeat this---->
                               <?php
                                      while($data2 = mysqli_fetch_array($chracter)){
                                     ?>
                                    
                                  
                                     
                                <div class="col">
                                    <a href="../Character/Character.php?id=<?=$data2['ID']?>&name=<?=$path?>">
                                    <div class="justify-content-center spacer-slider" data-bs-hover-animate="pulse">
                                        <figure class="figure" style="  width: 100%;"><img class="figure-img" src="<?=$data2['IMAGE']?>" style="  width: 100%;" />
                                            <figcaption class="figure-caption" style="  font-size: 16px;"><span>
                                                <?=$data2['FNAME']?> <?=$data2['LNAME']?> 
                                            </span>
                                            </figcaption>
                                        </figure>
                                       
                                    </div>
                                    </a>
                                </div>

                                 <?php }?>
                            <!----------------------------------->
                            </div>
                                </div>
                            </div>
                        </div>
                        
                                    
                        <!------------------------------------------------------------------------------------------------------------------>
                         <div class="row" style="padding-right: 50px;padding-left: 50px;">
                            <div class="col">
                                <div style="margin-top: 22px;">
                                    <h2 style="font-size: 42px;font-family: Acme, sans-serif;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Movies Related</h2>
							          <div class="row no-gutters row-cols-3 justify-content-center align-items-center" style="  padding: 0px;margin-top: 25px;">
							<!--------------Repeat this---->
							                                        
							   <?php
                                      while($data3 = mysqli_fetch_array($moviesRelated)){
                                     ?>
                                    
                                  
                                     
                                <div class="col">
                                    <a href="../Movie_Page/Movie_page.php?id=<?=$data3['ID']?>&name=<?=$path?>">
                                    <div class="justify-content-center spacer-slider" data-bs-hover-animate="pulse">
                                        <figure class="figure" style="  width: 100%;"><img class="figure-img" src="<?=$data3['POSTER']?>" style="  width: 100%;" />
                                            <figcaption class="figure-caption" style="  font-size: 16px;"><span>
                                                <?=$data3['NAME_MOVIE']?>  
                                            </span>
                                            </figcaption>
                                        </figure>
                                       
                                    </div>
                                    </a>
                                </div>

                                 <?php }?>
							<!----------------------------------->
							</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer id="footer" style="background: rgb(33,33,46);margin-top: 0px;box-shadow: 0px -2px 20px 4px #21212e;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="font-size: 37px;font-family: Cookie, cursive;">NOT&nbsp;&nbsp;<span style="color: rgb(97,154,254);">flex</span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">CMP © 2023</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div class="d-lg-flex justify-content-lg-center align-items-lg-center"><img class="d-lg-flex" src="assets/img/icons8-address-64.png">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
    <script src="assets/js/carddd.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive-1.js"></script>
    <script src="assets/js/--mp---Multiple-items-slider-responsive.js"></script>
    <script src="assets/js/3D-SLIDER-1.js"></script>
    <script src="assets/js/3D-SLIDER-2.js"></script>
    <script src="assets/js/3D-SLIDER-3.js"></script>
    <script src="assets/js/3D-SLIDER-4.js"></script>
    <script src="assets/js/3D-SLIDER-5.js"></script>
    <script src="assets/js/3D-SLIDER.js"></script>
    <script src="assets/js/carddd-1.js"></script>
    <script src="assets/js/carddd-2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="assets/js/Media-Slider-Bootstrap-3.js"></script>
    <script src="assets/js/Responsive-News-Card-Slider.js"></script>
    <script src="assets/js/Review-rating-Star-Review-Button.js"></script>
    <script src="assets/js/Slider_Carousel_webalgustocom.js"></script>
    <script src="assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
    <script src="assets/js/Swiper-Slider.js"></script>
</body>

</html>