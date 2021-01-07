

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

  public function get_Movie_fav($user_name)
  {
    $qury = ("SELECT ID,POSTER,NAME_MOVIE,DESCRIPTION_OF_MOVIE FROM MOVIE, ADD_TO_FAV_MOVIE  WHERE ID = MOVIE_ID AND USER_NAME_OF_USER = '$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function get_Series_fav($user_name)
  {
    $qury = ("SELECT ID,POSTER,NAME_SERIES,DESCRIPTION FROM SERIES, add_to_fav_series  WHERE ID = SERIES_ID AND USER_NAME_OF_USER ='$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function RemoveFilmFromFavorite($FilmID, $user_name)
  {
    $qury = ("DELETE FROM add_to_fav_movie WHERE MOVIE_ID ='$FilmID' AND USER_NAME_OF_USER = '$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function RemoveSeriesFromFavorite($SeriesID, $user_name)
  {
    $qury = ("DELETE FROM add_to_fav_series WHERE SERIES_ID ='$SeriesID' AND USER_NAME_OF_USER = '$user_name'");
    return $result = mysqli_query($this->_conn, $qury);
  }
  public function get_user_info($name)
  {
    $qury = ("SELECT * FROM user_of_notflix  WHERE USER_NAME = '$name'");
    return $result = mysqli_query($this->_conn, $qury);
  }


  public function edit_user_email($user_name,$email)
  {
    if($email=="")
    {
      return;
    }
    $record = $this->_conn->query("SELECT EMAIL FROM user_of_notflix WHERE EMAIL='$email'");
    if ($record->num_rows != 0)
    {
    echo "<script> alert('Oops!, This Email is already Exist!');  </script>";
    }
    else
    {
    $qury="UPDATE user_of_notflix SET EMAIL= '".$email."' where USER_NAME ='".$user_name."' ";
    mysqli_query($this->_conn, $qury);
    }
    return;
  }

  public function edit_user_password($user_name,$password)
  {
    if($password=="")
    {
      return;
    } 
    $record = $this->_conn->query("SELECT PASSWORD_OF_USER FROM user_of_notflix WHERE PASSWORD_OF_USER ='$password'");
    if ($record->num_rows != 0)
    {
    echo "<script> alert('Oops!, Use another password');  </script>";
    }
    else
    {
    $qury="UPDATE user_of_notflix SET PASSWORD_OF_USER = '".$password."' where USER_NAME ='".$user_name."' ";
    mysqli_query($this->_conn, $qury);
    }
    return;
  }

  public function edit_user_age($user_name,$age)
  {
    if($age==0 || $age=="")
    {
      return;
    }
    $qury="UPDATE user_of_notflix SET AGE= '".$age."' where USER_NAME ='".$user_name."' ";
    return $result = mysqli_query($this->_conn, $qury);
  }
  public function edit_user_image($user_name,$image)
  {

    $qury="UPDATE user_of_notflix SET image= '".$image."' where USER_NAME ='".$user_name."' ";
    mysqli_query($this->_conn, $qury);
    return 0;

  }
}

class admin{
  private $_conn;

  public function __construct()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function get_admin_info($name)
  {
    $qury = ("SELECT * FROM admin_website  WHERE ADMIN_NAME = '$name'");
    return $result = mysqli_query($this->_conn, $qury);
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
    echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function addcompanytofilm($FilmID, $companyID)
  {

    $qury = "INSERT INTO funded_movie VALUES ($FilmID,$companyID)";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  //Nada

  public function DeleteMoviewithId($FilmID)
  {

    $qury = ("DELETE FROM MOVIE WHERE ID ='$FilmID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function UpdateNewMovie($id,$Name, $year, $duration, $description, $language, $revenue, $budget, $link, $poster, $admin, $rate, $count, $Director, $prize, $story)
  {
    $record = $this->_conn->query("SELECT NAME_MOVIE FROM movie WHERE NAME_MOVIE='$Name'");

    
      $qury = "UPDATE  movie SET NAME_MOVIE = '$Name', YEAR = $year, DURATION_MIN = '$duration', DESCRIPTION_OF_MOVIE = '$description',
       LANGUAGE_MOBIE = '$language', REVENUE = $revenue, BUDGET = $budget, HOME_PAGE_LINK = '$link', POSTER = '$poster',
       ADMIN_INSETED_MOVIE = '$admin', IMDB_RATE = $rate, IMDB_RATE_COUNT = $count, DIRECTOR_ID = $Director, PRIZE_WON_ID = $prize, STORY_ID = $story
       WHERE ID = $id";

       echo $qury;
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
    $qury = "SELECT FNAME,LNAME,Director_ID From director D , MOVIE M WHERE M.Director_ID = D.ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getPrizeforMovie($ID)
  {

    $qury = "SELECT TITLE, TYPE_OF_PRTIZE,PRIZE_WON_ID From PRIZE P, MOVIE M WHERE M.PRIZE_WON_ID = P.ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getStoryforMovie($ID)
  {

    $qury = "SELECT STORY_NAME,S.STORY_ID From STORY S, MOVIE M WHERE M.STORY_ID = S.STORY_ID AND M.ID = '$ID' ";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

///
 

  public function getlanguage()
  {

    $qury = "SELECT DISTINCT LANGUAGE_MOBIE From movie";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }



  public function getgenre()
  {

    $qury = "SELECT DISTINCT ID,GENRE_TYPE From genre";
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
    $qury = "SELECT * from movie where ADMIN_INSETED_MOVIE='$Name'";

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

  public function delet_actor_with_movieId($ID)
  {
    $qury = "DELETE from acted_movie where MOVIE_ID=" . "'$ID'";

    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function delet_genre_with_movieId($ID){
    $qury="DELETE from genre_relation_movie where MOVIE_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }
  
  public function delet_company_with_movieId($ID){
    $qury="DELETE from funded_movie where MOVIE_ID="."'$ID'";

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
  
  public function getFilmrate($id){
    $qury = "SELECT AVG(RATE) FROM rate_movie where  MOVIE_ID=$id";
      
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

  public function getprize()
  {

    $qury = "SELECT DISTINCT ID,TITLE,TYPE_OF_PRTIZE From prize";
    //echo $qury;
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
  public function get_movie_count($id)
  {
    $qury="SELECT COUNT(*) as movie_count from acted_movie WHERE acted_movie.ACTOR_ID=".$id;
    return $result = mysqli_query($this->_conn, $qury); 
  }

  public function get_awards($id)
  {
    $qury="SELECT pz.TITLE as Prize_Title from prize as pz , actor_prize_movie as apv where pz.ID=apv.PRIZE_ID and apv.ACTOR_ID=".$id;
    return $result = mysqli_query($this->_conn, $qury); 
  }

  public function get_movies($id)
  {
    $qury="SELECT movie.* FROM movie,acted_movie WHERE acted_movie.MOVIE_ID=movie.ID AND acted_movie.ACTOR_ID=".$id;
    return $result = mysqli_query($this->_conn, $qury); 
  }
  public function get_series($id)
  {
    $qury="SELECT series.* FROM series,acted_series WHERE acted_series.SERIES_ID=series.ID AND acted_series.ACTOR_ID=".$id;
    return $result = mysqli_query($this->_conn, $qury); 
  }
  public function getactor()
  {

    $qury = "SELECT DISTINCT ID,FNAME,LNAME From actor";
    //echo $qury;
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
  public function Num_of_Movies($id){
    $qury="SELECT COUNT(MOVIE_ID) FROM director_prize_movie WHERE DIRECTOR_ID = '$id'";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }
  public function Num_of_Series($id){
    $qury="SELECT COUNT(SERIES_ID) FROM director_prize_series WHERE DIRECTOR_ID = '$id'";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function Get_Prize($id){
    $qury="SELECT TITLE,TYPE_OF_PRTIZE FROM PRIZE WHERE ID=
    (SELECT DISTINCT m.PRIZE_ID FROM director_prize_movie m WHERE m.DIRECTOR_ID = '$id'
    union SELECT DISTINCT s.PRIZE_ID FROM director_prize_series s WHERE s.DIRECTOR_ID = '$id')";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function Get_Movies($id){
    $qury="SELECT * FROM MOVIE WHERE DIRECTOR_ID = '$id'";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }
  public function Get_Series($id){
    $qury="SELECT * FROM series WHERE DIRECTOR_ID = '$id'";
    
    return $reselt=mysqli_query($this->_conn,$qury);
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

  public function getstory()
  {

    $qury = "SELECT DISTINCT STORY_ID,STORY_NAME From story";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
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
//////////////////////////////////////////////////////////
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
  public function getcompany()
  {

    $qury = "SELECT ID,COMPANY_NAME From production_company";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }
  public function insertnewCompany($name,$year){
    $record = $this->_conn->query("SELECT COMPANY_NAME FROM production_company WHERE COMPANY_NAME='$name'");
    if ($record->num_rows != 0)
    echo "<script> alert('Oops!, This Company is already Exist!');  window.location.href='AddCompany.html';</script>";
  else{
    $qury = "INSERT INTO production_company (`COMPANY_NAME`,`YEAR_FOUNDED`) VALUES ('$name',$year)";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);

  }

  }
}
/////////////////////////////////////////////////////////
class advertisement
{
  private $_conn; 
  public function __construct ()
  {
    $DB_opt = Database::getInstance();
    $this->_conn = $DB_opt->getConnection();
  }

  public function Addnew($abminName,$pic){
    $qury="INSERT into advertisement (ADMIN_ADDED , PICTURE) VALUES ('$abminName','$pic')";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function get_for_admin($abminName){
    $qury="SELECT PICTURE,ID FROM advertisement WHERE ADMIN_ADDED = '$abminName'";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }
  public function DeleteadvertisementwithId($ID){
    $qury="DELETE FROM advertisement WHERE ID = '$ID'";
    
    return $reselt=mysqli_query($this->_conn,$qury);
  }
  public function get_whit_id($id){
    $qury="SELECT * FROM advertisement WHERE ID = '$id'";
    
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

  public function get_all_for_admin($name){
    $qury="SELECT * from  series WHERE ADMIN_INSETED_SERIES = " . "'$name'";
   return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function get_all_with_id($id){
    $qury="SELECT * from  series WHERE ID = " . "'$id'";
   return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function addgenretoSeries($FilmID, $genreID)
  {

    $qury = "INSERT INTO genre_relation_series  VALUES ('$FilmID','$genreID')";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function addactortoSeries($FilmID, $actorID)
  {

    $qury = "INSERT INTO acted_series (`SERISE_ID`,`ACTOR_ID`) VALUES ($FilmID,$actorID)";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function addcompanytoSeries($FilmID, $companyID)
  {

    $qury = "INSERT INTO funded_series VALUES ($FilmID,$companyID)";
    //echo $qury;
    $result = mysqli_query($this->_conn, $qury);
  }

  public function addseason($series,$number,$poster,$link){
    $qury="INSERT INTO season VALUES ($series,$number,'$poster','$link')";
    $result = mysqli_query($this->_conn, $qury);
  }

  public function getid($title)
  {
    $qury = "SELECT ID From series WHERE NAME_SERIES='$title'";
    //echo $qury;
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function InsertNewSeries($Name, $year, $duration, $description, $language, $revenue, $budget, $link, $poster, $admin, $rate, $count,$EPISODES ,$Director, $prize)
  {
    $record = $this->_conn->query("SELECT NAME_SERIES FROM series WHERE NAME_SERIES='$Name'");

    if ($record->num_rows != 0)
      echo "<script> alert(' This Series already Exist!');  window.location.href='AddSeries.php';</script>";

    else {
      $qury = "INSERT INTO series (`NAME_SERIES`, `YEAR`, `DURATION_MIN`, `DESCRIPTION`, `LANGUAGE_MOBIE`, `REVENUE`, `BUDGET`, `HOME_PAGE_LINK`, `POSTER`, `ADMIN_INSETED_SERIES`, `IMDB_RATE`, `IMDB_RATE_COUNT`,`NUMBER_OF_EPISODES_IN_SEASON`, `DIRECTOR_ID`, `PRIZE_WON_ID`)  VALUES 
   ('$Name',$year,'$duration','$description','$language',$revenue,$budget,'$link','$poster','$admin',$rate,$count,$EPISODES,$Director,$prize)";
      echo $qury;
      $result = mysqli_query($this->_conn, $qury);
    }
  }
  
  /////////////
  public function DeleteSerieswithId($SERIESID)
  {

    $qury = ("DELETE FROM SERIES WHERE ID ='$SERIESID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function UpdateSeries($id,$Name, $year, $duration, $description, $language, $revenue, $budget, $link, $poster, $admin, $rate, $count, $Director, $prize, $NUMBER_OF_EPISODES)
  {
    $record = $this->_conn->query("SELECT NAME_SERIES FROM SERIES WHERE NAME_SERIES='$Name'");

    
      $qury = "UPDATE  SERIES SET NAME_SERIES = '$Name', 'YEAR' = $year, DURATION_MIN = '$duration', DESCRIPTION = '$description',
       LANGUAGE_MOBIE = '$language', REVENUE = $revenue, BUDGET = $budget, HOME_PAGE_LINK = '$link', POSTER = '$poster',
       ADMIN_INSETED_SERIES = '$admin', IMDB_RATE = $rate, IMDB_RATE_COUNT = $count, DIRECTOR_ID = $Director, PRIZE_WON_ID = $prize, NUMBER_OF_EPISODES_IN_SEASON = $NUMBER_OF_EPISODES)
       WHERE ID = '$id'";
      $result = mysqli_query($this->_conn, $qury);
  }

  public function RetrieveactortoSeries($SeriesID)
  {

    $qury = ("SELECT ID,FNAME,LNAME FROM acted_series, actor WHERE ACTOR_ID = ID AND SERIES_ID ='$SeriesID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function RetrievegenretoSeries($SeriesID)
  {

    $qury = ("SELECT ID,GENRE_TYPE FROM GENRE, GENRE_RELATION_SERIES  WHERE ID = GENRE_ID AND SERIES_ID ='$SeriesID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function RetrieveProductionCompanytoSeries($SeriesID)
  {

    $qury = ("SELECT ID,COMPANY_NAME FROM PRODUCTION_COMPANY, FUNDED_SERIES WHERE PRODUCTION_COMPANY_ID = ID and SERIES_ID ='$SeriesID'");
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getDirectorforSeries($ID)
  {
    $qury = "SELECT FNAME,LNAME From director D , SERIES M WHERE M.Director_ID = D.ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function getPrizeforSeries($ID)
  {

    $qury = "SELECT TITLE, TYPE_OF_PRTIZE From PRIZE P, SERIES M WHERE M.PRIZE_WON_ID = P.ID AND M.ID = '$ID' ";
    return $result = mysqli_query($this->_conn, $qury);
  }

  public function delet_actor_with_seriesId($ID)
  {
    $qury = "DELETE from acted_series where SERIES_ID=" . "'$ID'";

    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function delet_genre_with_seriesId($ID){
    $qury="DELETE from genre_relation_series where SERIES_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }
  
  public function delet_company_with_seriesId($ID){
    $qury="DELETE from funded_series where SERIES_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function getSerierate($ID)
  {
  	$qury = "SELECT AVG(RATE) FROM rate_series where  SERIES_ID=$ID";
      
    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function countrates($ID){
    $qury = "SELECT COUNT(*) FROM rate_series where  SERIES_ID=$ID";
      
    return $reselt = mysqli_query($this->_conn, $qury);
  }
  

  public function addratetoSerie($name,$id,$rate)
  {
    $record = $this->_conn->query("SELECT * FROM rate_series WHERE( USER_NAME_WHO_RATED='$name' AND SERIES_ID=$id )");
    if ($record->num_rows != 0) {
      $qury = "UPDATE rate_series set RATE=$rate where USER_NAME_WHO_RATED='$name' and SERIES_ID=$id";
     
      return $reselt = mysqli_query($this->_conn, $qury);
      
    } 
    else {
      $qury = "INSERT INTO rate_series VALUES ('$name',$id,$rate)";
      
      return $reselt = mysqli_query($this->_conn, $qury);
     
    }
  }


public function insertSerietoFav($name,$id)
  {
    $record = $this->_conn->query("SELECT USER_NAME_OF_USER,SERIES_ID FROM add_to_fav_series WHERE( USER_NAME_OF_USER='$name' AND SERIES_ID='$id' )");
    if ($record->num_rows != 0) {
      echo "<script> alert('This Series already exist in your Favorite List'); </script>";
      
      
    } else {
      $qury = "INSERT INTO add_to_fav_series VALUES ('$name',$id)";
      
      return $reselt = mysqli_query($this->_conn, $qury);
     
    }
  
  }

  public function get_genre_with_serieId($ID){
    $qury="SELECT * from genre_relation_series where SERIES_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function get_company_with_serieId($ID){
    $qury="SELECT * from funded_series where SERIES_ID="."'$ID'";

    return $reselt=mysqli_query($this->_conn,$qury);
  }

  public function get_actor_with_serieId($ID)
  {
    $qury = "SELECT * from acted_series where SERIES_ID=" . "'$ID'";

    return $reselt = mysqli_query($this->_conn, $qury);
  }

  public function get_season_with_serieId($ID)
  {
    $qury = "SELECT * from season where SERIES_ID=" . "'$ID'";

    return $reselt = mysqli_query($this->_conn, $qury);
  }
}


?>