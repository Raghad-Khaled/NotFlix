<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Character</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/AddCharacter.css">
    <link rel="icon" href="../images/logo.png">
</head>
<body>
    <?php
  include '../control.php';  // Using database connection file here
  $movie=new movie;
  ?>
    <nav class="navbar navbar-light "  >
        <div class="navbar-brand"  >
          
        <img src="https://img.icons8.com/nolan/60/fantasy.png"/>
        
        </div>
        <div class="head">
        Add New Fantacy Character
        </div>
      </nav>
      
      <form method="POST" action="Add.php" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-3 col-12 form-group">
                <label class="form-label" for="title"> Frist Name</label>
                 <input type="text" class="form-control" required name="Fname" >
            </div>
            <div class="col-lg-3 col-12 form-group">
                <label class="form-label" for="title"> Last Name</label>
                <input type="text" class="form-control" required name="Lname" >
            </div>
            <div class="col-lg-3 col-12 form-group">
                <label class="form-label" for="title">Image Link</label>
                 <input type="text" class="form-control" required name="postar" id="postar">
            </div>

            <div class="col-lg-3 col-12 form-group">
            <label class="form-label" for="date">Birth date</label>
            <input class="form-control" type="date" required value="1988-08-11" name="birthdate" id="date">
        </div>

           
        </div>
        <div class="row row2">
            
        <div class="col-lg-3  "></div>

            <div class="col-lg-3  col-12 form-group gendr">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gendr" id="inlineRadio1" value="M"> Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gendr" id="inlineRadio2" value="F"> Fmale
                </label>
              </div>
            </div>  

            <div class="col-lg-3 col-12 form-group">
            <select class="form-select form-control" aria-label="Default select example" name="story">
                <option disabled selected>Chose the Story of Character</option>
                
                <?php
 
    $records =  $movie->getstory();

    while($data = mysqli_fetch_array($records))
    {
        echo "<option value='". $data['STORY_ID'] ."'>" .$data['STORY_NAME'] ."</option>";  // displaying data in option menu
    }	
?> 
              </select>

    </div>

    <div class="col-lg-3  "></div>
    
    <div class="form-group col-lg-12 col-12">
                <label for="exampleTextarea">Brif about the Character</label>
                <textarea class="form-control" id="exampleTextarea" name="Overview" rows="3"></textarea>
     </div> 
   
    
    
        
      </div>

      <div class="text-center ">
        <button type="submit" class="btn btn-lg btn-light" name="submit">Add</button>
    </div>
    </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>      