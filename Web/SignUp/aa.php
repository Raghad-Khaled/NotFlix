
<?php



if(isset($_POST['signup']))
{

$username=$_POST['username'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];


echo "username= " .$username. "<br>";
echo "password=  ".$password."<br>";
echo "age= ".$age."<br>";
echo "email= ".$email."<br>";
echo "gender=".$gender;
}
?>
