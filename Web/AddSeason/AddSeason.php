<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Season</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/AddSeason.css">
    <link rel="icon" href="../images/logo.png">
</head>
<body>
    <?php
  include '../control.php';  // Using database connection file here
  $series=new series;
  ?>
    <nav class="navbar navbar-light "  >
        <div class="navbar-brand"  >
          
        <img src="https://img.icons8.com/nolan/50/tv-show.png"/>
        
        </div>
        <div class="head">
        Add New Season
        </div>
      </nav>
      
      <form method="POST" action="Add.php" enctype="multipart/form-data">
      <div class="container">

        <div class="row">
            <div class="col-lg-3 col-12 form-group">
                <select class="form-select form-control" style="margin-top:43px" aria-label="Default select example" name="series">
                    <option disabled selected>Chose the Series</option>
                    
                    <?php
     
        $records =  $series->get_all();
    
        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['ID'] ."'>" .$data['NAME_SERIES'] ."</option>";  // displaying data in option menu
        }	
    ?> 
                  </select>
            </div>

            <div class="col-lg-3 col-12 form-group">
                <label class="form-label" for="title"> Season Number</label>
                <input type="number" class="form-control" required name="number" >
            </div>
            <div class="col-lg-3 col-12 form-group">
                <label class="form-label" for="title">Poster Link</label>
                <input type="text" class="form-control" required name="poster" >
            </div>

            <div class="col-lg-3 col-12 form-group">
            <label class="form-label" for="date">Season Link</label>
            <input class="form-control" type="text" required  name="link" id="date">
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