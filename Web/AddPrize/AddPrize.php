<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Prize</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Addprize.css">
    <link rel="icon" href="../images/logo.png">
</head>
<body>
    <?php
  include '../control.php';  // Using database connection file here
  $movie=new movie;
  ?>
    <nav class="navbar navbar-light "  >
        <div class="navbar-brand"  >
          
            <img src="https://img.icons8.com/nolan/50/trophy.png"/> 
        
        </div>
        <div class="head">
        Add New Prize
        </div>
      </nav>
     
      <div class="container-fluid">

      <div class="row">  
    <div class="col-3">  
      <div class="text-center button ">
            <button type="button" class="btn btn-lg btn-light" id="btn1">Actor in Movie</button>
       </div>
    </div>
    <div class="col-6"></div>
    <div class="col-3">  
      <div class="text-center button ">
            <button type="button" class="btn btn-lg btn-light"  id="btn2">Actor in Series</button>
       </div>
    </div>

      </div>
      
      


      <div class="row " >    
      <div class="col-3">  
      <div class="text-center button ">
            <button type="button" class="btn btn-lg btn-light" id="btn3">Director for Movie </button>
       </div>
    </div>
    <div class="col-6"></div>
    <div class="col-3">  
      <div class="text-center button ">
            <button type="button" class="btn btn-lg btn-light" id="btn4">Director for Series</button>
       </div>
    </div>
      </div>


      <div class="row " > <div class="col-5"></div> <div class="col-2 text-center button ">
            <button type="button" class="btn btn-lg btn-light" id="btn5">Add Prize </button>
       </div> 
       <div class="col-5">
      </div>

    </div>
    
      <form method="POST" action="Add.php" id="form1" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Title</label>
                 <input type="text" class="form-control"  name="title1" >
            </div>
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Type</label>
                <input type="text" class="form-control"  name="Type1" >
            </div>
            

            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="date">Year</label>
                <input class="form-control" type="month"  value="1988-08" name="year1" id="year">
            </div>
        </div>

         <div class="row">
        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="actor1" >
                <option disabled selected>Actor</option> 
                <?php
     
                $actor=new actor;
                $records =  $actor->getactor();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['FNAME']  .$data['LNAME']  ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="movie1" >
                <option disabled selected>Movie</option> 
                <?php
     
                
                $records =$movie->get_all();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['NAME_MOVIE']   ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

         </div>

        

        <div class="text-center button ">
            <button type="submit" class="btn btn-lg btn-light" name="submit1">Add</button>
        </div>
        
      </div>
    </form>





    <form method="POST" action="Add.php" id="form2" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Title</label>
                 <input type="text" class="form-control"  name="title2" >
            </div>
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Type</label>
                <input type="text" class="form-control"  name="Type2" >
            </div>
            

            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="date">Year</label>
                <input class="form-control" type="month"  value="1988-08" name="year2" id="year">
            </div>
        </div>

         <div class="row">
        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="actor2" >
                <option disabled selected>Actor</option> 
                <?php
     
                $actor=new actor;
                $records =  $actor->getactor();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['FNAME'] .$data['LNAME']  ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="Series2" >
                <option disabled selected>Series</option> 
                <?php
                $series=new series;
                $records =  $series->get_all();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['NAME_SERIES']   ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

         </div>

        

        <div class="text-center button ">
            <button type="submit" class="btn btn-lg btn-light" name="submit2">Add</button>
        </div>
        
      </div>
    </form>




    <form method="POST" action="Add.php" id="form4" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Title</label>
                 <input type="text" class="form-control"  name="title3" >
            </div>
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Type</label>
                <input type="text" class="form-control"  name="Type3" >
            </div>
            

            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="date">Year</label>
                <input class="form-control" type="month"  value="1988-08" name="year3" id="year">
            </div>
        </div>

         <div class="row">
        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="director3" >
                <option disabled selected>Director</option> 
                <?php
                 $director=new director;
                $records = $director->get_all();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['FNAME']  .$data['LNAME']  ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="series3" >
                <option disabled selected>Series</option> 
                <?php
                $series=new series;
                $records =  $series->get_all();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['NAME_SERIES']   ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

         </div>

        <div class="text-center button ">
            <button type="submit" class="btn btn-lg btn-light" name="submit3">Add</button>
        </div>
        
      </div>
    </form>




    <form method="POST" action="Add.php" id="form3" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Title</label>
                 <input type="text" class="form-control"  name="title4" >
            </div>
            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="title">Prize Type</label>
                <input type="text" class="form-control"  name="Type4" >
            </div>
            

            <div class="col-lg-4 col-12 form-group">
                <label class="form-label" for="date">Year</label>
                <input class="form-control" type="month"  value="1988-08" name="year4" id="year">
            </div>
        </div>

         <div class="row">
        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example" id="A1"  name="director4" >
                <option disabled selected>Director</option> 
                <?php
     
                    $director=new director;
                    $records = $director->get_all();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['FNAME'] .$data['LNAME']  ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

        <div class="col-lg-6 form-group">
            <select class="form-select form-control" aria-label="Default select example"  name="movie4" >
                <option disabled selected>Movie</option> 
                <?php
     
                
                $records =$movie->get_all();
           
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value='". $data['ID'] ."'>" .$data['NAME_MOVIE']   ."</option>";  // displaying data in option menu
                }	
            ?> 
            </select>
        </div>

         </div>

        

        <div class="text-center button ">
            <button type="submit" class="btn btn-lg btn-light" name="submit4">Add</button>
        </div>
        
      </div>
    </form>



    <form method="POST" action="Add.php" id="form5" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-6 col-12 form-group">
                <label class="form-label" for="title">Prize Title</label>
                 <input type="text" class="form-control"  name="title5" >
            </div>
            <div class="col-lg-6 col-12 form-group">
                <label class="form-label" for="title">Prize Type</label>
                <input type="text" class="form-control"  name="Type5" >
            </div>
            
            </div>

         </div>

        <div class="text-center button ">
            <button type="submit" class="btn btn-lg btn-light" name="submit5">Add</button>
        </div>
        
      </div>
    </form>

   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../JS/html-duration-picker.min.js"></script>
<script src="../JS/AddPrize.js"></script>
</body>
</html>      