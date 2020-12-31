

<?php


require('Database.php');

class user
{
  private $_conn;

  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }


  public function InsertNewUser($name, $password, $email, $age, $gender)
  {
    $record = $this->_conn->query("SELECT EMAIL FROM user_of_notflix WHERE EMAIL='$email'");
    $record2 = $this->_conn->query("SELECT USER_NAME FROM user_of_notflix WHERE USER_NAME='$name'");



    if ($record->num_rows != 0)
      echo "<script> alert('Oops!, This Email is already Exist!');  window.location.href='SignUp.html';</script>";
    else if ($record2->num_rows != 0)
      echo "<script> alert('Oops!, This Username is already Exist!');  window.location.href='SignUp.html';</script>";
    else {
      $qury = "INSERT INTO user_of_notflix  VALUES ('$name','$password','$email','$age','$gender')";
      echo $qury;
      $result = mysqli_query($this->_conn, $qury);
    }
  }


  public function User_Sign_In($email, $password)
  {
    $record = $this->_conn->query("SELECT EMAIL FROM user_of_notflix WHERE( EMAIL='$email' AND PASSWORD_OF_USER='$password' )");
    if ($record->num_rows == 0) {
      echo "<script> alert('Wrong username or password');</script>";
    } else {
      echo "<script> alert('Welcome Back!!!!');</script>";
    }
  }
}



/////////////////////////////Raghad///////////////////////////////
class Movie
{
  private $_conn;

  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }


  public function InsertNewMovie($Name, $year, $duration, $description, $language, $revenue, $budget, $link, $poster, $admin, $rate, $count, $Director, $prize, $story)
  {
    $record = $this->_conn->query("SELECT NAME_MOVIE FROM movie WHERE NAME_MOVIE='$Name'");

    if ($record->num_rows != 0)
      echo "<script> alert(' This Film is already Exist!');  window.location.href='AddFilm.php';</script>";

    else {
      $qury = "INSERT INTO movie (`NAME_MOVIE`, `YEAR`, `DURATION_MIN`, `DESCRIPTION_OF_MOVIE`, `LANGUAGE_MOBIE`, `REVENUE`, `BUDGET`, `HOME_PAGE_LINK`, `POSTER`, `ADMIN_INSETED_MOVIE`, `IMDB_RATE`, `IMDB_RATE_COUNT`, `DIRECTOR_ID`, `PRIZE_WON_ID`, `STORY_ID`)  VALUES 
   ('$Name',$year,'$duration','$description','$language',$revenue,$budget,'$link','$poster','$admin',$rate,$count,$Director,$prize,$story)";
      //echo $qury;
      $result = mysqli_query($this->_conn, $qury);
    }
  }


  public function addgenretofilm($FilmID, $genreID)
  {

    $qury = "INSERT INTO genre_relation_movie  VALUES ('$FilmID','$genreID')";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function addactortofilm($FilmID, $actorID)
  {

    $qury = "INSERT INTO acted_movie (`MOVIE_ID`,`ACTOR_ID`) VALUES ($FilmID,$actorID)";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function addcompanytofilm($FilmID, $companyID)
  {

    $qury = "INSERT INTO funded_movie VALUES ($FilmID,$companyID)";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function getlanguage()
  {

    $qury = "SELECT DISTINCT LANGUAGE_MOBIE From movie";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getDirector()
  {

    $qury = "SELECT DISTINCT ID,FNAME,LNAME From director";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getstory()
  {

    $qury = "SELECT DISTINCT STORY_ID,STORY_NAME From story";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getprize()
  {

    $qury = "SELECT DISTINCT ID,TITLE From prize WHERE TYPE_OF_PRTIZE='Best movie'";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }


  public function getactor()
  {

    $qury = "SELECT DISTINCT ID,FNAME,LNAME From actor";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getgenre()
  {

    $qury = "SELECT DISTINCT ID,GENRE_TYPE From genre";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getcompany()
  {

    $qury = "SELECT ID,COMPANY_NAME From production_company";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getid($title)
  {
    $qury = "SELECT ID From movie WHERE NAME_MOVIE='$title'";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function get_movie_languages()
  {
    $qury = "SELECT DISTINCT LANGUAGE_MOBIE FROM movie ";
    return $result = mysqli_query($this->_conn, $qury);
  }


  public function get_all()
  {
    $qury = "SELECT  * FROM movie ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getMoviewithId($ID)
  {
    $qury = "SELECT * from movie where ID=" . "'$ID'";

    return $reselt = mysqli_query($this->_conn, $qury);
  }


  public function get_actor_with_movieId($ID)
  {
    $qury = "SELECT * from acted_movie where MOVIE_ID=" . "'$ID'";

    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function get_genre_with_movieId($ID){
    $qury="SELECT * from genre_relation_movie where MOVIE_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }
  
  public function get_company_with_movieId($ID){
    $qury="SELECT * from funded_movie where MOVIE_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }
}

///////////////////////////////////////////////////////////////////////////////////////

class genre
{
  private $_conn;

  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function get_genres()
  {
    $qury = "SELECT DISTINCT ID,GENRE_TYPE From genre";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getgenrewithId($ID){
    $qury="SELECT * From genre where ID="."'$ID'";    
    return $result= mysqli_query($this->_conn,$qury);    

  }
  

}
//////////////////////////////////////////////////////////////////////////////////
class prize
{
  private $_conn;
  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function get_prize_names()
  {
    $qury = "SELECT DISTINCT ID,TITLE From prize";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getprizewithId($ID)
  {
    $qury = "SELECT *from prize where ID=" . "'$ID'";
    return $reselt = mysqli_query($this->_conn, $qury);
  }
}

/////////////////////////////////////////////////////////////////////////////////
class actor
{
  private $_conn;
  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function getactorwithId($ID)
  {
    $qury = "SELECT * From actor where ID=" . "'$ID'";
    return $result = mysqli_query($this->_conn, $qury);
  }
  public function insertactor($Fname,$Lname,$gender,$birth,$image){

    $qury="INSERT INTO actor (`FNAME`,`LNAME`,`GENDER`,`BIRTH_DATE`,`IMAGE`) VALUES('$Fname','$Lname','$gender','$birth','$image')";
    return $result = mysqli_query($this->_conn, $qury);
  }
}
////////////////////////////////////////////////////////////////////////////////////////////////
class director
{
  private $_conn;
  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function getdirectotwithId($ID)
  {
    $qury = "SELECT * from director  where ID=" . "'$ID'";
    return $reselt = mysqli_query($this->_conn, $qury);
  }
  public function insertdirector($Fname,$Lname,$gender,$birth,$image){

    $qury="INSERT INTO director (`FNAME`,`LNAME`,`GENDER`,`BIRTH_DATE`,`IMAGE`) VALUES('$Fname','$Lname','$gender','$birth','$image')";
    return $result = mysqli_query($this->_conn, $qury);
  }
}
/////////////////////////////////////////////////////////////////////////////////////////////////
class story
{
  private $_conn;
  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function getstorywithId($ID)
  {
    $qury = "SELECT * from story  where STORY_ID=" . "'$ID'";
    return $reselt = mysqli_query($this->_conn, $qury);
  }
}

class character
{
  private $_conn;
  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function getcharcter_storyId($ID)
  {
    $qury = "SELECT * from  fantasy_character where STORY_ID=" . "'$ID'";
    return $reselt = mysqli_query($this->_conn, $qury);
  }
}

class company
{
  private $_conn; 
  public function __construct ()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function get_company_withID($ID){
    $qury="SELECT * from production_company where ID="."'$ID'";
   return $reselt=mysqli_query($this->_conn,$qury);
  }


}
?>