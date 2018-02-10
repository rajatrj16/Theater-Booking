<?php
$username='root';
$password= '';
$hostname= '127.0.0.81';
$dbname = 'testblob';

//connect to db
$dbconnect = mysqli_connect($hostname,$username,$password,$dbname);
if(!$dbconnect)
	die("Couldn't connect to the database");
echo
	"Connected to the database successfully";
$name = $_POST['name'];
$selectseat = $_POST['selectseat'];
$remainingseat = $_POST['remainingseat'];


$query= "Insert into customer values('$name','$selectseat','$remainingseat')";
$executed = mysqli_query($dbconnect,$query);
if(!$executed)
	die("Unable to register you");
echo "You are registered";

//close connection
mysqli_close($dbconnect);
?>
