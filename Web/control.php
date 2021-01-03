

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
/////////////////////////////Elhadidy bardo hh bm ////////////////
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

  public function InsertNewMovie2($Name, $year, $duration, $description, $language, $revenue, $budget, $link, $poster, $admin, $rate, $count, $Director, $prize)
  {
    $record = $this->_conn->query("SELECT NAME_MOVIE FROM movie WHERE NAME_MOVIE='$Name'");

    if ($record->num_rows != 0)
      echo "<script> alert(' This Film is already Exist!');  window.location.href='AddFilm.php';</script>";

    else {
      $qury = "INSERT INTO movie (`NAME_MOVIE`, `YEAR`, `DURATION_MIN`, `DESCRIPTION_OF_MOVIE`, `LANGUAGE_MOBIE`, `REVENUE`, `BUDGET`, `HOME_PAGE_LINK`, `POSTER`, `ADMIN_INSETED_MOVIE`, `IMDB_RATE`, `IMDB_RATE_COUNT`, `DIRECTOR_ID`, `PRIZE_WON_ID`)  VALUES 
   ('$Name',$year,'$duration','$description','$language',$revenue,$budget,'$link','$poster','$admin',$rate,$count,$Director,$prize)";
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

  //Nada
  public function get_all_fav($user_name)
  {
    $qury = ("SELECT ID,POSTER,NAME_MOVIE FROM MOVIE, add_to_fav_movie  WHERE ID = MOVIE_ID AND USER_NAME_OF_USER ='$user_name'
              UNION SELECT ID,POSTER,NAME_SERIES FROM SERIES, add_to_fav_series  WHERE ID = SERIES_ID AND USER_NAME_OF_USER ='$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function RemoveFromFavorite($FilmID, $user_name)
  {
    $record = $this->_conn->query("SELECT ID FROM MOVIE WHERE ID ='$FilmID'");
    if ($record->num_rows != 0) {
    $qury = ("DELETE FROM add_to_fav_movie WHERE MOVIE_ID ='$FilmID' AND USER_NAME_OF_USER = '$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
    }
    $record = $this->_conn->query("SELECT ID FROM SERIES WHERE ID ='$FilmID'");
    if ($record->num_rows != 0) {
    $qury = ("DELETE FROM add_to_fav_series WHERE SERIES_ID ='$FilmID' AND USER_NAME_OF_USER = '$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
    }
  }

  public function DeleteMoviewithId($FilmID)
  {

    $qury = ("DELETE FROM MOVIE WHERE ID ='$FilmID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function UpdateNewMovie($id,$Name, $year, $duration, $description, $language, $revenue, $budget, $link, $poster, $admin, $rate, $count, $Director, $prize, $story)
  {
    $record = $this->_conn->query("SELECT NAME_MOVIE FROM movie WHERE NAME_MOVIE='$Name'");

    
      $qury = "UPDATE  movie SET NAME_MOVIE = '$Name', 'YEAR' = $year, DURATION_MIN = '$duration', DESCRIPTION_OF_MOVIE = '$description',
       LANGUAGE_MOBIE = '$language', REVENUE = $revenue, BUDGET = $budget, HOME_PAGE_LINK = '$link', POSTER = '$poster',
       ADMIN_INSETED_MOVIE = '$admin', IMDB_RATE = $rate, IMDB_RATE_COUNT = $count, DIRECTOR_ID = $Director, PRIZE_WON_ID = $prize, STORY_ID = $story)
       WHERE ID = '$id'";
      $result = mysqli_query($this->_conn, $qury);
  }

  public function Retrieveactortofilm($FilmID)
  {

    $qury = ("SELECT ID,FNAME,LNAME FROM acted_movie, actor WHERE ACTOR_ID = ID AND MOVIE_ID ='$FilmID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function Retrievegenretofilm($FilmID)
  {

    $qury = ("SELECT ID,GENRE_TYPE FROM GENRE, GENRE_RELATION_MOVIE  WHERE ID = GENRE_ID AND MOVIE_ID ='$FilmID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function RetrieveProductionCompanytofilm($FilmID)
  {

    $qury = ("SELECT ID,COMPANY_NAME FROM PRODUCTION_COMPANY, FUNDED_MOVIE WHERE PRODUCTION_COMPANY_ID = ID and MOVIE_ID ='$FilmID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getDirectorforMovie($ID)
  {
    $qury = "SELECT FNAME,LNAME From director D , MOVIE M WHERE M.Director_ID = D.ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getPrizeforMovie($ID)
  {

    $qury = "SELECT TITLE, TYPE_OF_PRTIZE From PRIZE P, MOVIE M WHERE M.PRIZE_WON_ID = P.ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getStoryforMovie($ID)
  {

    $qury = "SELECT STORY_NAME From STORY S, MOVIE M WHERE M.STORY_ID = S.STORY_ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }
///
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

    $qury = "SELECT DISTINCT ID,TITLE,TYPE_OF_PRTIZE From prize";
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

  public function getMovieforAdmin($Name)
  {
    $qury = "SELECT * from movie where ADMIN_INSETED_MOVIE=" . "'$Name'";

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

  public function search_by_movie_name($Movie_Name)
  {
    $qury="SELECT * FROM `movie` WHERE Name_Movie LIKE '%".$Movie_Name."%' "; 

    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function filter($language,$genre_id,$era,$prize_id)
  {
   $qury ="Select distinct mv.* from movie as mv , genre_relation_movie as grv  where 1";
   if(!$language=="")
   {
    $qury.=" and mv.LANGUAGE_MOBIE='".$language."'";
   }
   if(!$genre_id=="")
   {
    $qury.=" and grv.GENRE_ID='".$genre_id."' and grv.MOVIE_ID=mv.ID";
   }
   if(!$prize_id=="")
   {
     $qury.=" and mv.PRIZE_WON_ID='".$prize_id."'";
   }
   if(!$era=="")
   {
     $qury.="  and (mv.YEAR>=".$era." and mv.YEAR<=".$era."+10 )";
   }

   return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function insertFilmtoFav($name,$id)
  {
    $record = $this->_conn->query("SELECT USER_NAME_OF_USER,MOVIE_ID FROM add_to_fav_movie WHERE( USER_NAME_OF_USER='$name' AND MOVIE_ID='$id' )");
    if ($record->num_rows != 0) {
      echo "<script> alert('This Film already exist in your Favorite List'); </script>";
      
      
    } else {
      $qury = "INSERT INTO add_to_fav_movie VALUES ('$name',$id)";
      
      return $reselt = mysqli_query($this->_conn, $qury);
     
    }
  
  }
  public function addratetoFilm($name,$id,$rate){
    $record = $this->_conn->query("SELECT * FROM rate_movie WHERE( USER_NAME_WHO_RATED='$name' AND MOVIE_ID=$id )");
    if ($record->num_rows != 0) {
      $qury = "UPDATE rate_movie set RATE=$rate where USER_NAME_WHO_RATED='$name' and MOVIE_ID=$id";
     
      return $reselt = mysqli_query($this->_conn, $qury);
      
    } else {
      $qury = "INSERT INTO rate_movie VALUES ('$name',$id,$rate)";
      
      return $reselt = mysqli_query($this->_conn, $qury);
     
    }
  }
  
  public function countnuberofrates($id){
    $qury = "SELECT COUNT(*) FROM rate_movie where  MOVIE_ID=$id";
      
    return $reselt = mysqli_query($this->_conn, $qury);
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
  public function exist($type){
    $qury="SELECT * FROM genre where GENRE_TYPE="."'$type'";
    return $result= mysqli_query($this->_conn,$qury);  
  }
  public function insert($type){
    $qury="INSERT INTO genre (`GENRE_TYPE`) VALUES ('$type')";
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
    $qury = "SELECT DISTINCT * From prize";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getprizewithId($ID)
  {
    $qury = "SELECT *from prize where ID=" . "'$ID'";
    return $reselt = mysqli_query($this->_conn, $qury);
  }
  public function InsertPrize($title,$type){

    $qury = "INSERT INTO prize (`TITLE`,`TYPE_OF_PRTIZE`) VALUES('$title','$type')";
    return $reselt = mysqli_query($this->_conn, $qury);

  }
  public function exist($title,$type){
    $qury = "SELECT *from prize where TITLE=" . "'$title' and TYPE_OF_PRTIZE=" . "'$type'";
    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function InsertActorMovie($actor,$movie,$prize,$year){
    $qury = "INSERT INTO actor_prize_movie  VALUES('$actor','$movie','$prize','$year')";
    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function InsertDirectorMovie($actor,$movie,$prize,$year){
    $qury = "INSERT INTO director_prize_movie  VALUES('$actor','$movie','$prize','$year')";
    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function InsertActorSeries($actor,$movie,$prize,$year){
    $qury = "INSERT INTO actor_prize_series  VALUES('$actor','$movie','$prize','$year')";
    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function InsertDirectorSeries($actor,$movie,$prize,$year){
    $qury = "INSERT INTO director_prize_series  VALUES('$actor','$movie','$prize','$year')";
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

  public function get_all(){
    $qury = "SELECT ID,FNAME,LNAME From director";
    //echo $qury;
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

  public function InsertStory($title,$author,$poster,$overview)
  {
    $qury = "INSERT INTO story (`STORY_NAME`,`AUTHOR_NAME`,`POSTER`,`Overview`) VALUES('$title','$author','$poster','$overview')";
    return $reselt = mysqli_query($this->_conn, $qury);
  }

}
//////////////////////////////
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

  public function insertcharacter($Fname,$Lname,$gender,$birth,$image,$storyid,$overview){

    $qury="INSERT INTO fantasy_character (`FNAME`,`LNAME`,`GENDER`,`BIRTH_DATE`,`IMAGE` ,`STORY`,`STORY_ID`) VALUES('$Fname','$Lname','$gender','$birth','$image','$overview','$storyid')";
    return $result = mysqli_query($this->_conn, $qury);
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
/////////////////////////////////////////////////////////

class series
{
  private $_conn; 
  public function __construct ()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function get_all(){
    $qury="SELECT * from  series";
   return $reselt=mysqli_query($this->_conn,$qury);
  }
  

  
}
?>