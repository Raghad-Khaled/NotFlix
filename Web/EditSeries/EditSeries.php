<?php
include '../control.php';  // Using database connection file here
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_GET, 'Admin_name', FILTER_SANITIZE_STRING);

$movie = new series;
$reselt = $movie->get_all_with_id($id);
$data = mysqli_fetch_assoc($reselt);
$reselt1 = $movie->RetrieveactortoSeries($id);
$reselt2 = $movie->RetrievegenretoSeries($id);
$reselt3 = $movie->RetrieveProductionCompanytoSeries($id);
$reselt4 = $movie->getDirectorforSeries($id);
$reselt5 = $movie->getPrizeforSeries($id);
$director = mysqli_fetch_assoc($reselt4);
$prize = mysqli_fetch_assoc($reselt5);
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

    <nav class="navbar navbar-light ">
        <div class="navbar-brand">

            <img class="d-inline-block align-top" src="https://img.icons8.com/nolan/50/movie.png" />
            <!-- <img class="d-inline-block align-top"  src="https://img.icons8.com/cotton/40/000000/movie-beginning--v1.png"/> -->
        </div>
        <div class="head">
            Edit Series
        </div>
    </nav>

    <form method="POST" action="EditS.php?id=<?= $data['ID'] ?>&Admin_Name=<?= $name ?> " enctype="multipart/form-data">
        <div class="container">
            <div class="row ">
                <div class="col-sm form-group">
                    <label class="form-label" for="title">Link for postar</label>
                    <input type="text" class="form-control" required name="postar" id="postar" value=<?= $data['POSTER'] ?>>

                </div>
                <div class="col-sm form-group">
                    <label class="form-label" for="title">Series Title </label>
                    <input type="text" class="form-control" required name="title" id="title" value=<?= $data['NAME_SERIES'] ?>>
                </div>
                <div class="col-sm form-group">
                    <label for="example-month-input" class="form-label">Year</label>
                    <input class="form-control" type="month" value="2020-08" required name="year" id="example-month-input" value=<?= $data['YEAR'] ?>>
                </div>
            </div>


            <div class="row ">
                <div class="col-12 col-lg-4 form-group">
                    <label class="form-label" for="Duration">Duration of the Film </label>
                    <input type="text" class="form-control html-duration-picker" name="duration" required id="Duration" data-hide-seconds placeholder=<?= $data['DURATION_MIN'] ?> value=<?= $data['DURATION_MIN'] ?>>
                </div>
                <div class="col-12 col-lg-4 form-group">
                    <label class="form-label" for="Buget">Budget </label>
                    <input type="number" class="form-control" id="Buget" required name="buget" value=<?= $data['BUDGET'] ?>>
                </div>
                <div class="col-12 col-lg-4 form-group">
                    <label for="Revenue" class="form-label">Revenue</label>
                    <input class="form-control" type="number" id="Revenue" required name="revenue" value=<?= $data['REVENUE'] ?>>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-lg-4 form-group">
                    <label class="form-label" for="rate">IMDB Rate </label>
                    <input type="number" class="form-control" id="rate" required name="rate" value=<?= $data['IMDB_RATE'] ?>>
                </div>
                <div class="col-12 col-lg-4 form-group ">
                    <label for="Count" class="form-label">IMDB Count</label>
                    <input class="form-control" type="number" id="Count" required name="count" value=<?= $data['IMDB_RATE_COUNT'] ?>>
                </div>

                <div class="col-12 col-lg-4 form-group ">
                    <label for="Count" class="form-label">Home page Link</label>
                    <input class="form-control" type="text" id="Count" required name="link" value=<?= $data['HOME_PAGE_LINK'] ?>>
                </div>
            </div>





            <div class="row ">
                <div class="col-12 col-lg-4 form-group">
                    <div class="row">
                        <div class="col-12 ">
                            <?php
                            $i = 1;
                            while ($actors = mysqli_fetch_assoc($reselt1)) {
                                if ($i == 1) {
                            ?>
                                    <select class="form-select form-control" aria-label="Default select example" id="A1" required name="actor<?= $i ?>">

                                        <option value="<?=$actors['ID']?>" selected><?= $actors['FNAME'] ?> <?= $actors['LNAME'] ?></option>
                                        <?php
                                        $actor = new actor;

                                        $records =  $actor->getactor();

                                        while ($data1 = mysqli_fetch_array($records)) {
                                            if ($actors['ID'] != $data1['ID'])
                                                echo "<option value='" . $data1['ID'] . "'>" . $data1['FNAME'] . $data1['LNAME']  . "</option>";  // displaying data in option menu
                                        }
                                    } else {
                                        ?>
                                        <select class="form-select form-control" aria-label="Default select example" id="A1" name="actor<?= $i ?>">

                                            <option value="<?=$actors['ID']?>" selected><?= $actors['FNAME'] ?> <?= $actors['LNAME'] ?></option>
                                        <?php
                                        $actor = new actor;
                                        $records =  $actor->getactor();

                                        while ($data1 = mysqli_fetch_array($records)) {
                                            if ($actors['ID'] != $data1['ID'])
                                                echo "<option value='" . $data1['ID'] . "'>" . $data1['FNAME'] . $data1['LNAME']  . "</option>";  // displaying data in option menu
                                        }
                                    }
                                        ?>
                                        </select>
                                    <?php
                                    $i = $i + 1;
                                }
                                    ?>
                                    <?php
                                    while ($i < 4) {
                                    ?>
                                        <select class="form-select form-control" aria-label="Default select example" id="A1" name="actor<?= $i ?>">

                                            <option selected></option>
                                            <?php
                                            $records =  $actor->getactor();

                                            while ($data1 = mysqli_fetch_array($records)) {
                                                if ($actors['ID'] != $data1['ID'])
                                                    echo "<option value='" . $data1['ID'] . "'>" . $data1['FNAME'] . $data1['LNAME']  . "</option>";  // displaying data in option menu
                                            }
                                            ?>
                                        </select>
                                    <?php
                                        $i = $i + 1;
                                    }
                                    ?>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-4 form-group">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            $i = 1;
                            while ($genre = mysqli_fetch_assoc($reselt2)) {
                                if ($i == 1) {
                            ?>
                                    <input type="text" class="form-control" required name="genre<?= $i ?>" id="G1" style="margin-top:15px;" placeholder="Genre" value=<?= $genre['GENRE_TYPE'] ?>>
                                <?php
                                } else {
                                ?>
                                    <input type="text" class="form-control" name="genre<?= $i ?>" id="G1" style="margin-top:15px;" placeholder="Genre" value=<?= $genre['GENRE_TYPE'] ?>>
                            <?php
                                }
                                $i = $i + 1;
                            }
                            ?>
                            <?php
                            while ($i < 4) {
                            ?>
                                <input type="text" class="form-control" name="genre<?= $i ?>" id="G1" style="margin-top:15px;" placeholder="Genre">
                            <?php
                                $i = $i + 1;
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 form-group ">
                    <div class="row">
                        <div class="col-12">
                            <?php
                            $i = 1;
                            while ($ProductionCompany = mysqli_fetch_assoc($reselt3)) {
                                if ($i == 1) {
                            ?>
                                    <select class="form-select form-control" aria-label="Default select example" id="P1" required name="company<?= $i ?>">
                                        <option value="<?=$ProductionCompany['ID']?> selected><?= $ProductionCompany['COMPANY_NAME'] ?></option>
                                        <?php
                                        $company = new company;
                                        $records =  $company->getcompany();

                                        while ($data1 = mysqli_fetch_array($records)) {
                                            if ($ProductionCompany['ID'] != $data1['ID'])
                                                echo "<option value='" . $data1['ID'] . "'>" . $data1['COMPANY_NAME'] . "</option>";  // displaying data1 in option menu
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                ?>
                                    <select class="form-select form-control" aria-label="Default select example" id="P1" name="company<?= $i ?>">
                                        <option selected><?= $ProductionCompany['COMPANY_NAME'] ?></option>
                                        <?php
                                        $records =  $company->getcompany();

                                        while ($data1 = mysqli_fetch_array($records)) {
                                            if ($ProductionCompany['ID'] != $data1['ID'])
                                                echo "<option value='" . $data1['ID'] . "'>" . $data1['COMPANY_NAME'] . "</option>";  // displaying data1 in option menu
                                        }
                                        ?>
                                    </select>
                            <?php
                                }
                                $i = $i + 1;
                            }
                            ?>
                            <?php
                            while ($i < 4) {
                            ?>
                                <select class="form-select form-control" aria-label="Default select example" id="P1" name="company<?= $i ?>">
                                    <option selected></option>
                                    <?php
                                    $records =  $company->getcompany();

                                    while ($data1 = mysqli_fetch_array($records)) {
                                        if ($ProductionCompany['ID'] != $data1['ID'])
                                            echo "<option value='" . $data1['ID'] . "'>" . $data1['COMPANY_NAME'] . "</option>";  // displaying data1 in option menu
                                    }
                                    ?>
                                </select>
                            <?php
                                $i = $i + 1;
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <div class="row ">
                    <div class="col-12 col-lg-3 form-group">
                        <input type="text" class="form-control" required name="language" style="margin-top:10px" placeholder="language" value=<?= $data['LANGUAGE_MOBIE'] ?>>
                    </div>
                    <div class="col-12 col-lg-3 form-group">
                        <select class="form-select form-control" aria-label="Default select example" required name="Director">
                            <option value="<?=$director['Director_ID']?> selected><?= $director['FNAME'] ?><?= $director['LNAME'] ?></option>
                            <?php
                            $Director = new Director;
                            $records =  $Director->get_all();

                            while ($data1 = mysqli_fetch_array($records)) {
                                if ($director['FNAME'] != $data1['FNAME'] && $director['LNAME'] != $data1['LNAME'])
                                    echo "<option value='" . $data1['ID'] . "'>" . $data1['FNAME'] . $data1['LNAME'] . "</option>";  // displaying data1 in option menu
                            }
                            ?>
                        </select>

                    </div>
                    <div class="col-12 col-lg-3 form-group ">
                        <input type="number" class="form-control" required name="Episodes" style="margin-top:10px" placeholder="Number_Of_Episodes" value=<?= $data['NUMBER_OF_EPISODES_IN_SEASON'] ?>>
                    </div>

                    <div class="col-12 col-lg-3 form-group ">
                        <select class="form-select form-control" aria-label="Default select example" required name="prize">
                            <option value="<?=$prize['PRIZE_WON_ID']?> selected><?= $prize['TITLE'] ?><?= $prize['TYPE_OF_PRTIZE'] ?></option>
                            <?php
                            $prize1 = new prize;
                            $records =  $prize1->getprize();

                            while ($data1 = mysqli_fetch_array($records)) {
                                if ($prize['ID'] != $data1['ID'])
                                    echo "<option value='" . $data1['ID'] . "'>" . $data1['TITLE'] . "</option>";  // displaying data1 in option menu
                            }
                            ?>
                        </select>
                    </div>
                </div>




                <div class="row ">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required name="description"><?= $data['DESCRIPTION'] ?> </textarea>
                        <label for="floatingTextarea2"></label>
                    </div>

                </div>

                <div class="text-center ">
                    <button type="submit" class="btn btn-lg btn-light" name="submit">Update</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="../JS/html-duration-picker.min.js"></script>
    <script src="../JS/script.js"></script>
</body>

</html>