<?php

echo "Welcome<br>";
// connect my sql 
//three variable to connect a mysql
$servername = "localhost";
$username = "root";
$password = "";

// connection object 

$conn = mysqli_connect($servername, $username, $password);
// echo "Connection was sucessfull"
//  die if cnnection was not  connect 
if(!$conn){
    die("Sorry failed to connect". mysqli_connect_error());
}
?>