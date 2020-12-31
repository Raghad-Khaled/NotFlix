<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Movies</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aref+Ruqaa">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Button-Icon-Round.css">
    <link rel="stylesheet" href="assets/css/Content-Filter---CodyHouse-No-cutom-Code.css">
    <link rel="stylesheet" href="assets/css/Filter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/menu-collapse-ultimate.css">
    <link rel="stylesheet" href="assets/css/navBar-1.css">
    <link rel="stylesheet" href="assets/css/navBar1-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-9.css">
    <link rel="stylesheet" href="assets/css/tc-cardhover-14.css">
</head>

<body style="background: #21212e;">
    <?php
    include '../control.php';  // Using database connection file here
    $genre_obj=new genre;
    $movie=new movie;
    $prize_obj=new prize;
    ?>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white transparency border-bottom border-light" id="transmenu" style="height: 72px;">
        <div class="container"><a class="navbar-brand text-success" href="#header" style="padding-top: 0px;padding-bottom: 0px;"><img src="assets/img/5027d5fc-d38c-4aba-ab1c-e41212bf9e10_200x200.png" style="margin-top: 2px;padding-top: 8px;height: 63px;width: 173px;"></a><button data-toggle="collapse" class="navbar-toggler collapsed" data-target="#navcol-1"><img src="assets/img/icons8-menu-64.png" style="width: 49px;height: 47px;margin-top: -15px;"></button>
            <div class="collapse navbar-collapse" id="navcol-1"><input type="search" style="border-radius: 24px;width: 238px;height: 34px;border-width: 0px;margin-left: -14px;"><a href="#"><img src="assets/img/icons8-search-64.png" style="width: 42px;margin-left: 6px;margin-right: 0px;"></a>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(251,251,251);"><strong>Profile</strong><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer" style="color: rgb(255,255,255);">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Log out</a></li>
                </ul><a class="d-lg-flex justify-content-lg-center align-items-lg-center" href="#" style="margin-top: 0px;margin-left: 21px;"><span>Donya Esawi</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg" style="width: 50px;margin-left: 5px;"></a>
            </div>
        </div>
    </nav>
    <section id="header" style="margin-bottom: 133px;border-radius: 54px;box-shadow: -7px 7px 20px 4px rgba(189,17,250,0.25), 30px -1px 11px #46c2ff;"><!-- Paradise Slider -->
	<div id="fw_al_007" class="carousel ps_rotate_scale_c ps_indicators_l ps_control_rotate_f swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#fw_al_007" data-slide-to="0" class="active"></li>
			<li data-target="#fw_al_007" data-slide-to="1"></li>
			<li data-target="#fw_al_007" data-slide-to="2"></li>
            <li data-target="#fw_al_007" data-slide-to="3" ></li>
			<li data-target="#fw_al_007" data-slide-to="4"></li>
			<li data-target="#fw_al_007" data-slide-to="5"></li>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">

				<!-- Slide Background -->
				<img src="assets/img/wallpapersden.com_star-wars-dark-side_2560x1440.jpg" alt="fw_al_007_01">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/30Qm6l.gif" alt="fw_al_007_02">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Third Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/tenor.gif" alt="fw_al_007_03">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- Fourth Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/uw0gHLX.jpg" alt="fw_al_007_04">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- Fifth Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/joker-joker-2019-movie-joaquin-phoenix-movies-hd-wallpaper-preview.jpg" alt="fw_al_007_05">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- Sixth Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/KlutzyFemaleArabianoryx-max-14mb.gif" alt="fw_al_007_06">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
             <!-- seventh Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/13-Reasons-to-watch-13-Reasons-Why-768x514.jpg" alt="fw_al_007_07">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
             <!-- eight Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/Animation.gif" alt="fw_al_007_08">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- 9th Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/Friends.gif" alt="fw_al_007_09">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">Start Now !</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- 10th Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/the-nun-movie-4k-fz.jpg" alt="fw_al_007_10">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">read more</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- 11th Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/TheQ.gif" alt="fw_al_007_11">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">read more</a>
				</div>
			</div>
			<!-- End of Slide -->
            <!-- 12th Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="assets/img/Nemo.gif" alt="fw_al_007_12">

				<!-- Slide Text Layer -->
				<div class="fw_al_007_slide">
					<h3 data-animation="animated flipInX">NOTflix</h3>
					<h1 data-animation="animated flipInX"><span>FIND</span> Your Interest</h1>
					<p data-animation="animated flipInX">Of Movies, Series, Novels and More !</p>
					<a href="#cards" data-animation="animated flipInX">read more</a>
				</div>
			</div>
			<!-- End of Slide -->
		</div><!-- End of Wrapper For Slides -->
		
		<!-- Left Control -->
		<a class="carousel-control-prev" href="#fw_al_007" data-slide="prev">
			<span class="fa fa-angle-left" aria-hidden="true"></span>
		</a>
		<!-- Right Control -->
		<a class="carousel-control-next" href="#fw_al_007" data-slide="next">
			<span class="fa fa-angle-right" aria-hidden="true"></span>
            
		</a>

	



 <!-- End --></section>
    <div style="height: 100px;">
        <div class="cd-tab-filter-wrapper">
            <div class="cd-tab-filter">
                <ul class="cd-filters">
                    <li class="placeholder"><a class="selected" href="#0" data-type="all"><strong>All</strong></a></li>
                    <li class="filter"><a class="selected" href="#0" data-type="all">movies</a></li>
                    <li class="filter" data-filter=".color-1"><a href="#1" data-type="color-1">Series</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="cards">
        <h1 style="margin-bottom: 31px;color: rgba(70,194,255,0.63);font-size: 30px;text-align: center;font-family: 'Architects Daughter', cursive;">Filter Results</h1><div class="filter">
    <form> 

   
    <!---  Combo boxes of filters ---->    
    <select style="margin-bottom:20px; margin-left:10px">
             <option value="">Language</option>


    <?php
     
    $records =  $movie->get_movie_languages();
    $counter=0;
    while($data = mysqli_fetch_array($records))
    {
    echo "<option value='". $temp ."'>" .$data['LANGUAGE_MOBIE']."</option>";  // displaying data in option menu
    $counter++;
    }	
    ?> 

        </select>
        <select style="margin-bottom:20px; margin-left:10px">
             <option value="">Genre</option>
  
             <?php
     
    $records =  $movie->getgenre();
    $temp=0;
     while($data = mysqli_fetch_array($records))
     {
        echo "<option value='". $data['ID'] ."'>" .$data['GENRE_TYPE']."</option>";  // displaying data in option menu
        $temp++;
     }	
 ?> 
             

        </select>
    <select style="margin-bottom:20px; margin-left:10px">
             <option value="">Era</option>
             <?php
             
             $year=1910;
              $counter=0;
             while($counter<=10)
     {
        echo "<option value='". $counter ."'>" .$year."</option>";  // displaying data in option menu
        $counter++;
        $year+=10;
     }
             
             
             ?>
        </select>
    <select style="margin-bottom:20px; margin-left:10px">
             <option value="">Prize</option>

             <?php
             
             $records =  $prize_obj->get_prize_names();
          
             while($data = mysqli_fetch_array($records))
             {
             echo "<option value='". $data['ID'] ."'>" .$data['LANGUAGE_MOBIE']."</option>";  // displaying data in option menu
             
             }	
             
             ?>
        </select>
    <!--------------------------------->
    
    </form>
</div>





<!---- Honestly IDK what is this :""  -->
        <div class="row" style="margin-top: 40px;padding: 33px;">
            <div class="col-md-3">
                <div class="d-none d-md-block"></div>
                <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                    <div class="collapse" id="filters">
                        <div class="filters">
                            <div class="filter-item">
                                <h3>Categories</h3>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Phones</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Laptops</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">PC</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Tablets</label></div>
                            </div>
                            <div class="filter-item">
                                <h3>Brands</h3>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Samsung</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Apple</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">HTC</label></div>
                            </div>
                            <div class="filter-item">
                                <h3>OS</h3>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Android</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">iOS</label></div>
                            </div>
                        </div>
                    </div>
                </div>

<!------------------------------------------------------------>



                <!-- Advertisement Card-->
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body" style="height: 100%;width: 100%;"><img src="assets/img/329990e7a9fe7cb6fd3bf9d616f1b0dc.jpg" style="width: 100%;"></div>
                </div>
                <!---------------------->


            </div>
            <div class="col-md-9">
                <div class="products">
                    <div class="row no-gutters">



                    	<!-- Movie Card-->
                        <?php
                        
                        $records=$movie->get_all();
                        while($data = mysqli_fetch_array($records)){
                            if(is_null($data['POSTER']))  //IF THE PO5TER IS NULL LOAD IT WITH THE DEFAULT POSTER OF AVENGERS THAT WE HAVE
                            {
                                $data['POSTER']="assets/img/91SCNVEssVL._AC_SY741_.jpg";
                            }
                        ?>

                        <div class="col-12 col-md-6 col-lg-4" style="padding: 13px;">
                            <figure class="figure tc-cardhover-14"><figcaption>
    <a href="../Movie_Page/Movie_page.php?id=<?=$data['ID']?>"  rel="stylesheet" type="text/css"><h3><?php echo $data['NAME_MOVIE'];?></h3>
    <p><?php echo $data['DESCRIPTION_OF_MOVIE']; ?></p></a>
  </figcaption><img class="figure-img" src=<?php echo $data['POSTER']; ?>></figure>
                        </div>

                        <?php } ?>
                        
                        <!------------->
									





                    </div>
                    <nav class="d-flex d-sm-flex d-lg-flex justify-content-center justify-content-sm-center justify-content-lg-center">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" style="background: #21212e;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#" style="font-size: 37px;font-family: Cookie, cursive;">NOT&nbsp;&nbsp;<span style="color: rgb(97,154,254);">flex</span></a></h3>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/moviesContainer.js"></script>
    <script src="assets/js/animatedNav.js"></script>
    <script src="assets/js/moviesContainer-1.js"></script>
    <script src="assets/js/navBar-1-1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/navBar-1-2.js"></script>
    <script src="assets/js/navBar-1.js"></script>
    <script src="assets/js/Swipe-Slider-9.js"></script>
    <script src="assets/js/user.js"></script>
</body>

</html>


