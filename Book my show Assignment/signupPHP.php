<?php
$username='root';
$password= '';
$hostname= '127.0.0.81';
$dbname = 'dbathon';

//connect to db
$dbconnect = mysqli_connect($hostname,$username,$password,$dbname);
if(!$dbconnect)
	die("Couln't connect to the database");
echo
	"Connected to the database successfully";
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$query= "Insert into customer values('$username','$password','$name','$email','$age','$address','$contact')";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
	die("Unable to register you");
echo "You are registered";

//close connection
mysqli_close($dbconnect);
?>
