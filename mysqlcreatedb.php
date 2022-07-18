<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password); 

// create a db 
$sql = "CREATE DATABASE dbNirav";
$result = mysqli_query($conn, $sql);

// echo $result ;
if($result){
    echo  "The data base created sucessfully";
}
else 
{
    echo "database was not created sucessfully because of this error" . mysqli_connect_error($conn);
}
if(!$conn){
    die("Sorry failed to connect". mysqli_connect_error());
}
?>