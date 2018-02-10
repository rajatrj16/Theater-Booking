<?php
$username='root';
$password= '';
$hostname= '127.0.0.81';
$dbname = 'testblob';
	$cn=mysqli_connect($hostname,$username,$password,$dbname) or die("Could not connect my sql");
	$query="select * from register where username='$username' and password='$password'";
	$rs=mysqli_query($cn,$query)or die("Could Not Perform the Query");
	if(mysqli_num_rows($rs)==1){
		echo '<html><head><title>Threater</title></head><body bgcolor="cyan"><h1 align="center">Welcome '.$username.'!</h1></body></html>';
	}
	else{
		$query="insert into register(username,password) values('$username','$password')";
		$rs1=mysqli_query($cn,$query)or die("Could Not Perform the Query");
		echo '<html><head><title>User Profile</title></head><body bgcolor="cyan"><h1 align="center">Welcome '.$username.'!<br></h1><h2>Your details were submitted sucessfully</h2></body></html>';
	}
?>
