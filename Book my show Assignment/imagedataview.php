<?php
if(!empty($_GET['id'])){
    //DB details
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbName   = 'testblob';
    
    //Create connection and select DB
    $db = new mysqli($hostname, $username, $password, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT image FROM testblob WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
}
?>