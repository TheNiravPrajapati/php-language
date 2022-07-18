<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbNirav";
$conn = mysqli_connect($servername, $username, $password, $database); 

if(!$conn){
    die("Sorry failed to connect". mysqli_connect_error());
}
else{
    echo "connectinon was sucessfully <br>";
}
// create table in db 
$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12)NOT NULL, `dest` VARCHAR(6) NOT NULL, PRIMARY KEY (`sno`)) ";


//check for table creation
$result = mysqli_query($conn, $sql);
if($result){
    echo  "The Table created sucessfully";
}
else 
{
    echo "Table was not created sucessfully because of this error" . mysqli_connect_error($conn);
}
?>