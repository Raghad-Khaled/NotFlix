<?php
require('Database.php');

class user{
    private $_conn;

    public function __construct (){
      $DB_opt = Database::getInstance();
      $this->_conn = $DB_opt->getConnection();
    }
     
  
    public function InsertNewUser($name,$password,$email,$age,$gender){
    $record =$this->_conn->query("SELECT EMAIL FROM user_of_notflix WHERE EMAIL='$email'");
    $record2 =$this->_conn->query("SELECT USER_NAME FROM user_of_notflix WHERE USER_NAME='$name'");

    if($record->num_rows !=0)
    echo "<script> alert('Oops!, This Email is already Exist!');  window.location.href='SignUp.php';</script>";
    else if($record2->nun_rows !=0)
    echo "<script> alert('Oops!, This Username is already Exist!');  window.location.href='SignUp.php';</script>";
    else{
     $qury="INSERT INTO user_of_notflix  VALUES ('$name','$password','$email','$age','$gender')";
     //echo $qury;
     $result= mysqli_query($this->_conn,$qury);
     //echo $result;
    }
    }

    
}
?>