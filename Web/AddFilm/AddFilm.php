<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AddFilm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/AddFilm.css">
  <link rel="icon" href="../images/logo.png">
</head>

<body>
  <?php
  include '../control.php';  // Using database connection file here
  $movie = new movie;
  ?>

  <nav class="navbar navbar-light ">
    <div class="navbar-brand">

      <img class="d-inline-block align-top" src="https://img.icons8.com/nolan/50/movie.png" />
      <!-- <img class="d-inline-block align-top"  src="https://img.icons8.com/cotton/40/000000/movie-beginning--v1.png"/> -->
    </div>
    <div class="head">
      Add New Film
    </div>
  </nav>

  <form method="POST" action="Add.php" enctype="multipart/form-data">
    <div class="container">
      <div class="row ">
        <div class="col-sm form-group">
          <label class="form-label" for="title">Link for postar</label>
          <input type="text" class="form-control" required name="postar" id="postar">

        </div>
        <div class="col-sm form-group">
          <label class="form-label" for="title">Film Title </label>
          <input type="text" class="form-control" required name="title" id="title">
        </div>
        <div class="col-sm form-group">
          <label for="example-month-input" class="form-label">Year</label>
          <input class="form-control" type="month" value="2020-08" required name="year" id="example-month-input">
        </div>
      </div>


      <div class="row ">
        <div class="col-12 col-lg-4 form-group">
          <label class="form-label" for="Duration">Duration of the Film </label>
          <input type="text" class="form-control html-duration-picker" name="duration" required id="Duration" data-hide-seconds>
        </div>
        <div class="col-12 col-lg-4 form-group">
          <label class="form-label" for="Buget">Buget </label>
          <input type="number" class="form-control" id="Buget" required name="buget">
        </div>
        <div class="col-12 col-lg-4 form-group">
          <label for="Revenue" class="form-label">Revenue</label>
          <input class="form-control" type="number" id="Revenue" required name="revenue">
        </div>
      </div>

      <div class="row ">
        <div class="col-12 col-lg-4 form-group">
          <label class="form-label" for="rate">IMDB Rate </label>
          <input type="number" class="form-control" id="rate" required name="rate">
        </div>
        <div class="col-12 col-lg-4 form-group ">
          <label for="Count" class="form-label">IMDB Count</label>
          <input class="form-control" type="number" id="Count" required name="count">
        </div>

        <div class="col-12 col-lg-4 form-group ">
          <label for="Count" class="form-label">Home page Link</label>
          <input class="form-control" type="text" id="Count" required name="link">
        </div>
      </div>





      <div class="row ">
        <div class="col-12 col-lg-4 form-group">
          <div class="row">
            <div class="col-9">
              <select class="form-select form-control" aria-label="Default select example" id="A1" required name="actor1">
                <option disabled selected>Actor</option>
                <?php
                $actor = new actor;
                $records =  $actor->getactor();

                while ($data = mysqli_fetch_array($records)) {
                  echo "<option value='" . $data['ID'] . "'>" . $data['FNAME'] . $data['LNAME']  . "</option>";  // displaying data in option menu
                }
                ?>
              </select>
              <select class="form-select form-control" aria-label="Default select example" id="A2" style="display: none;" name="actor2">
                <option disabled selected>Actor</option>
                <?php

                $records =  $actor->getactor();

                while ($data = mysqli_fetch_array($records)) {
                  echo "<option value='" . $data['ID'] . "'>" . $data['FNAME'] . $data['LNAME'] . "</option>";  // displaying data in option menu
                }
                ?>
              </select>
              <select class="form-select form-control" aria-label="Default select example" id="A3" style="display: none;" name="actor3">
                <option disabled selected>Actor</option>
                <?php

                $records =  $actor->getactor();

                while ($data = mysqli_fetch_array($records)) {
                  echo "<option value='" . $data['ID'] . "'>" . $data['FNAME'] . $data['LNAME'] . "</option>";  // displaying data in option menu
                }
                ?>
              </select>
            </div>
            <div class="col-3" id="addactor">
              <img src="https://img.icons8.com/nolan/64/plus.png" />
            </div>

          </div>
        </div>
        <div class="col-12 col-lg-4 form-group">
          <div class="row">
            <div class="col-9">
              <input type="text" class="form-control" required name="genre1" id="G1" style="margin-top:10px;" placeholder="Genre">
              <input type="text" class="form-control" name="genre2" id="G2" style="margin-top:10px; display: none;" placeholder="Genre">
              <input type="text" class="form-control" name="genre3" id="G3" style="margin-top:10px; display: none;" placeholder="Genre">

            </div>
            <div class="col-3" id="addgenre">
              <img src="https://img.icons8.com/nolan/64/plus.png" />
            </div>

          </div>
        </div>
        <div class="col-12 col-lg-4 form-group ">

          <div class="row">
            <div class="col-9">
              <select class="form-select form-control" aria-label="Default select example" id="P1" required name="company1">
                <option disabled selected>Production Company</option>
                <?php
                $company = new company;
                $records =  $company->getcompany();

                while ($data = mysqli_fetch_array($records)) {
                  echo "<option value='" . $data['ID'] . "'>" . $data['COMPANY_NAME'] . "</option>";  // displaying data in option menu
                }
                ?>
              </select>
              <select class="form-select form-control" aria-label="Default select example" id="P2" style="display: none;" name="company2">
                <option disabled selected>Production Company</option>
                <?php

                $records =  $company->getcompany();

                while ($data = mysqli_fetch_array($records)) {
                  echo "<option value='" . $data['ID'] . "'>" . $data['COMPANY_NAME'] . "</option>";  // displaying data in option menu
                }
                ?>
              </select>
              <select class="form-select form-control" aria-label="Default select example" id="P3" style="display: none;" name="company3">
                <option disabled selected>Production Company</option>
                <?php

                $records =  $company->getcompany();

                while ($data = mysqli_fetch_array($records)) {
                  echo "<option value='" . $data['ID'] . "'>" . $data['COMPANY_NAME'] . "</option>";  // displaying data in option menu
                }
                ?>
              </select>
            </div>
            <div class="col-3" id="addcompany">
              <img src="https://img.icons8.com/nolan/64/plus.png" />
            </div>

          </div>

        </div>
      </div>


      <div class="row ">
        <div class="col-12 col-lg-3 form-group">
          <input type="text" class="form-control" required name="language" style="margin-top:10px" placeholder="language">

        </div>
        <div class="col-12 col-lg-3 form-group">
          <select class="form-select form-control" aria-label="Default select example" required name="Director">
            <option disabled selected>Director</option>

            <?php
            $Director = new Director;
            $records =  $Director->get_all();

            while ($data = mysqli_fetch_array($records)) {
              echo "<option value='" . $data['ID'] . "'>" . $data['FNAME'] . $data['LNAME'] . "</option>";  // displaying data in option menu
            }
            ?>
          </select>

        </div>
        <div class="col-12 col-lg-3 form-group ">
          <select class="form-select form-control" aria-label="Default select example" name="story">
            <option disabled selected>If the Film has story chose it</option>

            <?php
            $story = new story;
            $records =  $story->getstory();

            while ($data = mysqli_fetch_array($records)) {
              echo "<option value='" . $data['STORY_ID'] . "'>" . $data['STORY_NAME'] . "</option>";  // displaying data in option menu
            }
            ?>
          </select>
        </div>

        <div class="col-12 col-lg-3 form-group ">
          <select class="form-select form-control" aria-label="Default select example"  name="prize">
            <option disabled selected>Prize</option>
            <?php
            $prize = new prize;
            $records =  $prize->getprize();

            while ($data = mysqli_fetch_array($records)) {
              echo "<option value='" . $data['ID'] . "'>" . $data['TITLE'] . $data['TYPE_OF_PRTIZE'] . "</option>";  // displaying data in option menu
            }
            ?>
          </select>
        </div>
      </div>




      <div class="row ">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required name="description"></textarea>
          <label for="floatingTextarea2">Description for the Film</label>
        </div>

      </div>

      <div class="text-center ">
        <button type="submit" class="btn btn-lg btn-light" name="submit">Add</button>
      </div>
    </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="../JS/html-duration-picker.min.js"></script>
  <script src="../JS/script.js"></script>
</body>

</html>