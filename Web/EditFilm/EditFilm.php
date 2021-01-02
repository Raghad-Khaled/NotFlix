<?php
include '../control.php';  // Using database connection file here
$movie1=new movie;
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$movie=new movie;
$reselt=$movie->getMoviewithId($id);
$data=mysqli_fetch_assoc($reselt);
$actors = $movie->Retrieveactortofilm($id);
$genre = $movie->Retrievegenretofilm($id);
$ProductionCompany = $movie->RetrieveProductionCompanytofilm($id);
$director = $movie->getDirectorforMovie($id);
$prize = $movie->getPrizeforMovie($id);
$story = $movie->getStoryforMovie($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditFilm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/AddFilm.css">
</head>
<body>

    <nav class="navbar navbar-light "  >
        <div class="navbar-brand"  >
          
         <img   class="d-inline-block align-top"    src="https://img.icons8.com/nolan/50/movie.png"/>  
        <!-- <img class="d-inline-block align-top"  src="https://img.icons8.com/cotton/40/000000/movie-beginning--v1.png"/> -->
        </div>
        <div class="head">
        Edit New Film
        </div>
      </nav>

      <form method="POST" action="Add.php" enctype="multipart/form-data">
      <div class="container">
        <div class="row ">
          <div class="col-sm form-group">
            <label class="form-label" for="title" value = <?=$data['POSTER'] ?>>Link for postar</label>
             <input type="text" class="form-control" required name="postar" id="postar">
            
          </div>
          <div class="col-sm form-group">
            <label class="form-label" for="title" value = <?=$data['NAME_MOVIE'] ?>>Film Title </label>
             <input type="text" class="form-control" required name="title" id="title">
          </div>
          <div class="col-sm form-group">
            <label for="example-month-input" class="form-label" value = <?=$data['YEAR'] ?>>Year</label>
            <input class="form-control" type="month" value="2020-08" required name="year" id="example-month-input">
          </div>
        </div>


        <div class="row ">
            <div class="col-12 col-lg-4 form-group" >
              <label class="form-label" for="Duration" value = <?=$data['DURATION_MIN'] ?>>Duration of the Film </label>
              <input type="text" class="form-control html-duration-picker" name="duration" required id="Duration" data-hide-seconds>
            </div>
            <div class="col-12 col-lg-4 form-group">
              <label class="form-label" for="Buget" value = <?=$data['BUDGET'] ?>>Budget </label>
               <input type="number" class="form-control" id="Buget" required name="buget">
            </div>
            <div class="col-12 col-lg-4 form-group">
              <label for="Revenue" class="form-label" value = <?=$data['REVENUE'] ?>>Revenue</label>
              <input class="form-control" type="number"  id="Revenue" required name="revenue" >
            </div>
          </div>

          <div class="row ">
            <div class="col-12 col-lg-4 form-group">
              <label class="form-label" for="rate" value = <?=$data['IMDB_RATE'] ?>>IMDB Rate </label>
               <input type="number" class="form-control" id="rate" required name="rate">
            </div>
            <div class="col-12 col-lg-4 form-group ">
              <label for="Count" class="form-label" value = <?=$data['IMDB_RATE_COUNT'] ?>>IMDB Count</label>
              <input class="form-control" type="number"  id="Count" required name="count">
            </div>

            <div class="col-12 col-lg-4 form-group ">
              <label for="Count" class="form-label" value = <?=$data['HOME_PAGE_LINK'] ?>>Home page Link</label>
              <input class="form-control" type="text"  id="Count" required name="link">
            </div>
          </div>



          

          <div class="row ">
            <div class="col-12 col-lg-4 form-group">
                <div class="row">
                    <div class="col-9">
                <select class="form-select form-control" aria-label="Default select example" id="A1" required name="actor1" >
                    
                <option disabled selected><?=$actors[0]?></option> 
                    <?php
     
     $records =  $movie1->getactor();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['FNAME'] .$data1['LNAME']  ."</option>";  // displaying data in option menu
     }	
 ?> 
 </select>
                <select class="form-select form-control" aria-label="Default select example" id="A2"  style="display: none;" name="actor2">
                <option disabled selected><?=$actors[1]?></option> 
                    <?php
     
     $records =  $movie1->getactor();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['FNAME'] .$data1['LNAME'] ."</option>";  // displaying data in option menu
     }	
 ?> 
                </select>
                <select class="form-select form-control" aria-label="Default select example" id="A3" style="display: none;" name="actor3">
                <option disabled selected><?=$actors[2]?></option> 
                    <?php
     
     $records =  $movie1->getactor();

     while($data = mysqli_fetch_array($records))
     {
         echo "<option value='". $data['ID'] ."'>" .$data['FNAME'] .$data['LNAME'] ."</option>";  // displaying data in option menu
     }	
 ?> 
                </select>
                    </div>
                <div class="col-3" id="addactor">
                  <img src="https://img.icons8.com/nolan/64/plus.png"/>
                </div>

            </div>
            </div>
            <div class="col-12 col-lg-4 form-group">
                <div class="row">
                    <div class="col-9">
                <select class="form-select form-control" aria-label="Default select example" id="G1" required name="genre1" >
                    <option disabled selected><?=$genre[0]?></option> 
                    <?php
     
     $records =  $movie1->getgenre();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['GENRE_TYPE'] ."</option>";  // displaying data in option menu
     }	
 ?> 
                </select>
                <select class="form-select form-control" aria-label="Default select example" id="G2" style="display: none;" name="genre2">
                <option disabled selected><?=$genre[1]?></option> 
                    <?php
     
     $records =  $movie1->getgenre();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['GENRE_TYPE'] ."</option>";  // displaying data in option menu
     }	
 ?> 
                </select>
                <select class="form-select form-control" aria-label="Default select example" id="G3" style="display: none;" name="genre3">
                <option disabled selected><?=$genre[2]?></option> 
                    <?php
     
     $records =  $movie1->getgenre();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['GENRE_TYPE'] ."</option>";  // displaying data in option menu
     }	
 ?> 
                </select>
                    </div>
                <div class="col-3" id="addgenre">
                  <img src="https://img.icons8.com/nolan/64/plus.png"/>
                </div>

            </div>
            </div>
            <div class="col-12 col-lg-4 form-group ">

                <div class="row">
                    <div class="col-9">
                <select class="form-select form-control" aria-label="Default select example" id="P1" required name="company1" >
                    <option disabled selected><?=$ProductionCompany[0]?></option> 
                    <?php
     
     $records =  $movie1->getcompany();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['COMPANY_NAME'] ."</option>";  // displaying data1 in option menu
     }	
 ?> 
                </select>
                <select class="form-select form-control" aria-label="Default select example" id="P2" style="display: none;" name="company2" >
                <option disabled selected><?=$ProductionCompany[1]?></option> 
                    <?php
     
     $records =  $movie1->getcompany();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['COMPANY_NAME'] ."</option>";  // displaying data1 in option menu
     }	
 ?> 
                </select>
                <select class="form-select form-control" aria-label="Default select example" id="P3" style="display: none;" name="company3">
                <option disabled selected><?=$ProductionCompany[2]?></option> 
                    <?php
     
     $records =  $movie1->getcompany();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['COMPANY_NAME'] ."</option>";  // displaying data1 in option menu
     }	
 ?> 
                </select>
                    </div>
                <div class="col-3" id="addcompany">
                  <img src="https://img.icons8.com/nolan/64/plus.png"/>
                </div>

            </div>
                
            </div>
          </div>


          <div class="row ">
            <div class="col-12 col-lg-3 form-group">
                <select class="form-select form-control" aria-label="Default select example" required name="language" >
                    <option disabled selected><?=$movie['LANGUAGE_MOBIE'] ?></option>
                    <?php
        
        $records =  $movie1->getlanguage();

        while($data1 = mysqli_fetch_array($records))
        {
            echo "<option value='". $data1['LANGUAGE_MOBIE'] ."'>" .$data1['LANGUAGE_MOBIE'] ."</option>";  // displaying data1 in option menu
        }	
    ?> 
                  </select>
            </div>
            <div class="col-12 col-lg-3 form-group">
                <select class="form-select form-control" aria-label="Default select example" required name="Director">
                    <option disabled selected><?=$director?></option>

                    <?php
        $records =  $movie1->getDirector();

        while($data1 = mysqli_fetch_array($records))
        {
            echo "<option value='". $data1['ID'] ."'>" .$data1['FNAME'] .$data1['LNAME']."</option>";  // displaying data1 in option menu
        }	
    ?> 
                  </select>

            </div>
            <div class="col-12 col-lg-3 form-group ">
                <select class="form-select form-control" aria-label="Default select example" name="story">
                    <option disabled selected><?=$story?></option>
                    
                    <?php
     
        $records =  $movie1->getstory();

        while($data1 = mysqli_fetch_array($records))
        {
            echo "<option value='". $data1['STORY_ID'] ."'>" .$data1['STORY_NAME'] ."</option>";  // displaying data1 in option menu
        }	
    ?> 
                  </select>
            </div>

            <div class="col-12 col-lg-3 form-group ">
              <select class="form-select form-control" aria-label="Default select example" required name="prize">
              <option disabled selected><?=$prize?></option>
              <?php
     
     $records =  $movie1->getprize();

     while($data1 = mysqli_fetch_array($records))
     {
         echo "<option value='". $data1['ID'] ."'>" .$data1['TITLE'] ."</option>";  // displaying data1 in option menu
     }	
 ?> 
                </select>
          </div>
          </div>

          

         
          <div class="row ">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required name="description"></textarea>
            <label for="floatingTextarea2"><?=$movie['DESCRIPTION_OF_MOVIE']?></label>
          </div>
          
         </div>

         <div class="text-center ">
         <button type="submit" class="btn btn-lg btn-light" name="submit">Submit</button>
         </div>
      </div>
  </div>
    </form>
            
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="../JS/html-duration-picker.min.js"></script>
      <script src="../JS/script.js"></script>
</body>
</html>