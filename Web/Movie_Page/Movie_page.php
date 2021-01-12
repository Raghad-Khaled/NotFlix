<?php
include '../control.php';  // Using database connection file here
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

session_start();
if($_SESSION['type'] == 'admin')
$hearder = "../admin/admin.php";
else
$hearder = "../user/user.php";

$movie=new movie;
$reselt=$movie->getMoviewithId($id);
$data=mysqli_fetch_assoc($reselt);
$Notflixcount=$movie->countnuberofrates($id);
$count=mysqli_fetch_assoc($Notflixcount);
$Notflixrate=$movie->getFilmrate($id);
$rate=mysqli_fetch_assoc($Notflixrate);
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
    <link rel="icon" href="../images/logo.png">
</head>

<body style="background: linear-gradient(#bd11fa, #46c2ff);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="padding: 4px;filter: hue-rotate(9deg); height: 67px">
        <div class="container"><a class="navbar-brand logo" data-aos="flip-left" data-aos-duration="1450" href="../Home_movies/Movies.php" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 28px;padding-top: 0px;padding-bottom: 0px;"><img src="assets/img/5027d5fc-d38c-4aba-ab1c-e41212bf9e10_200x200.png" style="margin-top: -1px;padding-top: 13px; height: 60px"></a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><img src="assets/img/icons8-menu-64.png" style="height: 50px"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" style="font-size: 16px;"><a href="../Home_movies/Movies.php" class="nav-link active" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a href="#footer" class="nav-link active" href="#footer" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="../log_out/log_out.php" style="color: rgba(255,255,255,0.9);font-family: Acme, sans-serif;font-size: 18px;">Log out</a></li>
                </ul><a class="d-flex justify-content-lg-center align-items-lg-center" href="<?=$hearder?>" style="margin-top: 0px;margin-left: 0px;"><span class="d-flex align-items-center" style="font-family: Acme, sans-serif;font-size: 18px;"><?=$_SESSION['name']?><img class="border rounded-circle img-profile" src="../EditinfoPage/user_pics/<?=$_SESSION['image']?>" style="width: 50px;margin-left: 5px;"></span></a>
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
                                <div class="gallery" style="background: rgba(135,73,237,0.32);box-shadow: inset 0px 0px 17px #af5eee;border-radius: 6px;"><a href="<?= $data['HOME_PAGE_LINK'] ?>"><img src="<?=$data['POSTER'] ?>" style="width: 100%;height: 100%;"></a></div>
                                <div style="margin-top: 22px;">
                                    <h3 style="font-family: 'Balsamiq Sans', cursive;font-size: 30px;margin-bottom: 10px;color: #8749ed;">Movie Rate</h3>
                                    <div class="d-inline-flex d-lg-flex align-items-lg-center"><span style="font-family: 'Architects Daughter', cursive;font-size: 24px;">IMDB:&nbsp;</span>
                                        <div class="rating" style="width: 402px;margin-left: 27px;">
                                        <!-------------Rate Stars------------------------------------------------------------------------------->
                                        <?php
                                        $i=$data['IMDB_RATE'];
                                        while($i>=2){
                                        $i=$i-2;
                                        ?>
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star.svg" style="width: 19px;">
                                        <?php } 
                                        if($data['IMDB_RATE']% 2!=0){
                                        ?>
                                                    
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star-half-empty.svg" style="width: 19px;">
                                        <?php 
                                        }
                                        $i=10-$data['IMDB_RATE'];
                                        while($i>=2){
                                            $i=$i-2;
                                        ?>
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star-empty.svg" style="width: 19px;">
                                        <?php
                                        }
                                        ?>            
                                        <!------------------------------------------------------------------------------------------------------>
                                        
                                        </div>
                                        

                                    </div>
                                    <div class="d-inline-flex d-lg-flex align-items-lg-center"><span style="font-family: 'Architects Daughter', cursive;font-size: 24px;">IMDB Rate Count:&nbsp;</span>
                                        <div >
                                        <!-------------Rate COUNT------------------------------------------------------------------------------->
                                        <span style="font-family: 'Architects Daughter', cursive;font-size: 22px;color: #8749ed;"><?=$data['IMDB_RATE_COUNT'] ?>&nbsp;</span>
                                        <!------------------------------------------------------------------------------------------------------>
                                        
                                        </div>
                                        

                                    </div>
                                    <div class="d-inline-flex d-lg-flex align-items-lg-center"><span style="font-family: 'Architects Daughter', cursive;font-size: 24px;">NOTflix:&nbsp;</span>
                                        <div class="rating" style="width: 402px;margin-left: 14px;">
                                        <!-------------Rate Stars------------------------------------------------------------------------------->
                                        <?php
                                       
                                        $i=$rate['AVG(RATE)'];
                                        while($i>=2){
                                        $i=$i-2;
                                        ?>
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star.svg" style="width: 19px;">
                                        <?php } 
                                        if( $i=$rate['AVG(RATE)']% 2!=0){
                                        ?>
                                                    
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star-half-empty.svg" style="width: 19px;">
                                        <?php 
                                        }
                                        $i=10- $i=$rate['AVG(RATE)'];
                                        while($i>=2){
                                            $i=$i-2;
                                        ?>
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star-empty.svg" style="width: 19px;">
                                        <?php
                                        }
                                        ?>         
                                        <!------------------------------------------------------------------------------------------------------>
                                        
                                        </div>
                                    </div>
                                    <div class="d-inline-flex d-lg-flex align-items-lg-center"><span style="font-family: 'Architects Daughter', cursive;font-size: 24px;">Notflix Rate Count:&nbsp;</span>
                                        <div >
                                        <!-------------Rate COUNT------------------------------------------------------------------------------->
                                        <span style="font-family: 'Architects Daughter', cursive;font-size: 22px;color: #8749ed;"><?=$count['COUNT(*)']?>&nbsp;</span>
                                        <!------------------------------------------------------------------------------------------------------>
                                        
                                        </div>
                                        

                                    </div>
                                </div>
                                <div>
                                    <h3 style="margin-top: 10px;font-family: 'Balsamiq Sans', cursive;font-size: 30px;margin-bottom: 10px;color: #8749ed;">Rate This Movie</h3>
                                    <form method="POST" action="rate.php?id=<?=$id?>" enctype="multipart/form-data">
                                    <div class="d-inline-flex"><input type="number" value="0" placeholder="0" min="0" max="10" name="rate" style="width: 123px;">
                                    <button style="background-color:#21212e; box-shadow: 0px; border-width: 0px" type="submit" name="submit"><img data-bs-hover-animate="swing" src="assets/img/star.svg" style="width: 26px;margin-left: 20px;"></button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                  <!----------------- title -->
                                    <h4 style="font-family: Acme, sans-serif;font-size: 32px;"><?=$data['NAME_MOVIE'] ?><a href="AddtoFav.php?id=<?=$id?>"><img data-bs-hover-animate="tada" src="assets/img/icons8-star-64.png" style="width: 35px;margin-left: 14px;"></a></h4>
                                    <div class="rating" style="margin-left: 18px;padding-bottom: 10px;">
                                    <?php
                                        $i=$data['IMDB_RATE'];
                                        while($i>=2){
                                        $i=$i-2;
                                        ?>
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star.svg" style="width: 19px;">
                                        <?php } 
                                        if($data['IMDB_RATE']% 2!=0){
                                        ?>
                                                    
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star-half-empty.svg" style="width: 19px;">
                                        <?php 
                                        }
                                        $i=10-$data['IMDB_RATE'];
                                        while($i>=2){
                                            $i=$i-2;
                                        ?>
                                                    <img data-aos="flip-left" data-aos-delay="200" src="assets/img/star-empty.svg" style="width: 19px;">
                                        <?php
                                        }
                                        ?>       
                                 </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
<!---------------------- Genre -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;">Genre</h4>
                                        <?php
                                            $records=$movie->get_genre_with_movieId($data['ID']);
                                            $genre=new genre;
                                            while($data2 = mysqli_fetch_array($records)){
                                               $genredata= $genre->getgenrewithId($data2['GENRE_ID']);
                                               $datagenre=mysqli_fetch_assoc($genredata);
                                        ?>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 10px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$datagenre['GENRE_TYPE'] ?></p>
                                       <?php } ?>
                                    </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                    <!------------------- Year of release -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Year of release</h4>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$data['YEAR'] ?></p>
                                    </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                    <!---------------------- Production Company -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Production Company</h4>
                                        <?php
                                            $records=$movie->get_company_with_movieId($data['ID']);
                                            $company=new company;
                                            while($data2 = mysqli_fetch_array($records)){
                                               $companydata= $company->get_company_withID($data2['PRODUCTION_COMPANY_ID']);
                                               $datacompany=mysqli_fetch_assoc($companydata);
                                        ?>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$datacompany['COMPANY_NAME'] ?> founded in <?=$datacompany['YEAR_FOUNDED'] ?></p>
                                        <?php } ?>
                                    </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                    <!------------------------- Duration -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Duration</h4>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$data['DURATION_MIN'] ?> min</p>
                                    </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                    <!--------------------------- Language -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Language</h4>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$data['LANGUAGE_MOBIE'] ?></p>
                                    </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                    <!----------------------- Prizes -->
                                    <?php
                                    $prize=new prize;
                                    $prizedata=$prize->getprizewithId($data['PRIZE_WON_ID']);
                                    $dataPrize=mysqli_fetch_assoc($prizedata);
                                    if($dataPrize!=NULL){
                                    ?>

                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Prizes</h4>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$dataPrize['TITLE']?> <?=$dataPrize['TYPE_OF_PRTIZE'] ?>  </p>
                                    </div>
                                     <?php }?>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                    <!--------------------------- Budget -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Budget</h4>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$data['BUDGET'] ?> $</p>
                                    </div>
                                    <div style="border-style: none;border-bottom: 1px solid rgba(120,17,250,0.42) ;">
                                   <!----------------------------- Revenue -->
                                        <h4 style="border-bottom: 1px none rgb(229,229,229);font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;margin-top: 10px;">Revenue</h4>
                                        <p class="text-left" style="margin-bottom: 10px;margin-top: 16px;margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;font-family: Nunito, sans-serif;"><?=$data['REVENUE'] ?> $</p>
                                    </div>
                                    <div>
                                        <h4 style="margin-top: 22px;font-family: 'Balsamiq Sans', cursive;font-size: 28px;color: #8749ed;">Story Line</h4>
                                    </div>
                                   <!------------------------- discription -->
                                    <div class="summary">
                                        <p style="margin-left: 18px;color: rgba(255,255,255,0.97);font-size: 16px;margin-bottom: 16px;font-family: Nunito, sans-serif;"><?=$data['DESCRIPTION_OF_MOVIE'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div style="border-style: none;padding-right: 50px;padding-left: 50px;">
                            <h2 style="font-size: 42px;font-family: Acme, sans-serif;margin-bottom: 20px;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Director</h2>
                            <div class="row d-xl-flex">
                                <div class="col-md-5" style="width: 239px;">
                                <!--------------------------- Director -->
                                  <?php
                                   $director=new director;
                                    $directordata=$director->getdirectotwithId($data['DIRECTOR_ID']);
                                    $datadirector=mysqli_fetch_assoc($directordata);
                                    
                                  ?>
                                    <figure class="figure" style="width: 241px;"><a href="../Director/Director.php?id=<?=$data['DIRECTOR_ID']?>"><img class="figure-img" src="<?=$datadirector['IMAGE'] ?>" style="width: 100%;height: 100%;box-shadow: 0px 0px 11px rgba(70,194,255,0.77), 0px 0px 12px #bd11fa;"></a></figure>
                                </div>
                                <div class="col-md-7 d-lg-flex m-auto align-items-lg-center justify-content-xl-start">
                                    <a href="../Director/Director.php?id=<?=$data['DIRECTOR_ID']?>">
                                        <h4 style="font-size: 34px;font-family: 'Chelsea Market', cursive;margin-top: 0px;"><?=$datadirector['FNAME'] ?> <?=$datadirector['LNAME'] ?> </h4>
                                    </a></div>
                            </div>
                        </div>
                        <div class="row" style="padding-right: 50px;padding-left: 50px;">
                            <div class="col">
                                <div style="margin-top: 22px;">
                                    <h2 style="font-size: 42px;font-family: Acme, sans-serif;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Cast</h2>
 <!---------------------------------- actors  -->                                 
 <div class="row no-gutters row-cols-3 justify-content-center align-items-center" style="  padding: 0px;
  margin-top: 25px;
">
<!--------------Repeat this---->
                                         <?php
                                            $records=$movie->get_actor_with_movieId($data['ID']);
                                            $actor=new actor;
                                            while($data2 = mysqli_fetch_array($records)){
                                               $actordata= $actor->getactorwithId($data2['ACTOR_ID']);
                                               $dataactor=mysqli_fetch_assoc($actordata);
                                            ?>
    <div class="col">
        <div class="justify-content-center spacer-slider" data-bs-hover-animate="pulse">
            <figure class="figure" style="  width: 100%;"><a href= "../Actor/Actor.php?id=<?=$dataactor['ID']?>"><img class="figure-img" src="<?= $dataactor['IMAGE'] ?>" style="  width: 100%;" /></a>
                <figcaption class="figure-caption" style="  font-size: 16px;"><span><?= $dataactor['FNAME'] ?> <?= $dataactor['LNAME'] ?>
            </span></figcaption>
            </figure>
           
        </div>
        
    </div>
    <?php } ?>
    <!--------------End Repeat------------------------------------>
    
<!--------------Repeat this---->
    
    <!--------------End Repeat------------------------------------>
</div>
                                </div>
                            </div>
                        </div>
                        <?php
                                   $story=new story;
                                    $storydata=$story->getstorywithId($data['STORY_ID']);
                                    $datastory=mysqli_fetch_assoc($storydata);
                                  ?>
                        <div class="m-auto" style="margin-left: 40px;padding-right: 50px;padding-left: 50px;">
                            <h2 style="margin-top: 18px;font-size: 42px;font-family: Acme, sans-serif;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Story Book</h2>
                            <div class="row" style="margin-top: 41px;">
                                <div class="col-md-5">
                                    <figure class="figure" style="box-shadow: 0px 0px 17px 2px rgba(70,194,255,0.48), 0px 0px 14px #bd11fa;"><img class="figure-img" src="<?= $datastory['POSTER'] ?>" style="width: 100%;height: 100%;"></figure>
                                </div>
                              <!------------------------------------ story -->
                                
                                <div class="col-md-7 d-lg-flex d-xl-flex align-items-lg-center justify-content-xl-start align-items-xl-center"><a href="../NovelPage/Novel_page.php?id=<?=$data['STORY_ID']?>">
                                        <h4 style="font-size: 34px;font-family: 'Chelsea Market', cursive;margin-left: 19px;"><?= $datastory['STORY_NAME'] ?></h4>
                                    </a></div>
                            </div>
                        </div>
                        <div class="m-auto" style="margin-top: 54px;margin-left: 18px;padding-right: 50px;padding-left: 50px;">
                            <h2 style="font-size: 42px;font-family: Acme, sans-serif;margin: 26px;margin-left: 11px;border-bottom: 1px solid #46c2ff;padding-bottom: 10px;padding-top: 10px;">Main Characters&nbsp;</h2>
                            <div class="m-auto blog-slider" style="margin-top: 40px;margin-left: 0px;">
                                <div class="blog-slider__wrp swiper-wrapper">
                                <?php
                                            $charactor=new character;
                                            $records2=$charactor->getcharcter_storyId($data['STORY_ID']);
                                            
                                            while($data3 = mysqli_fetch_array($records2)){
                                               
                                            ?>
                                    <div class="blog-slider__item swiper-slide">
                                        <div></div>
<!----------- character -->
                                        <div class="blog-slider__img">
                                            <img src="<?= $data3['IMAGE'] ?>" style="width: 100%;height: 100%;"></div>
                                        <div class="blog-slider__content">
                                            <div class="blog-slider__title"><?= $data3['FNAME'] ?> <?= $data3['LNAME'] ?>
                                            
                                        </div>
                                        <div class="blog-slider__text"><?= $data3['STORY'] ?> </div>
                                        <a class="class=&quot;blog-slider__button" style="color:rgba(120,17,250,0.42)"
                                         href="../Character/Character.php?id=<?= $data3['ID'] ?>">
                                    View Character Page</a></div>
                                    </div>
                                    
                                    <?php } ?>
                                    <div class="blog-slider__pagination"></div>
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
                <h3><a href="#" style="font-size: 37px;font-family: Cookie, cursive;">NOT&nbsp;<span style="color: rgb(97,154,254);">flix</span></a></h3>
                <p class="links"><a href="../Home_movies/Movies.php">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
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