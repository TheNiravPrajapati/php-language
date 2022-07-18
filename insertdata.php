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

$name = "Dev";
$destination = "England";

$sql = "INSERT INTO `trip` ( `name`, `dest`) VALUES ( '$name', '$destination')";

$result = mysqli_query($conn, $sql);

if($result){
    echo  "Data inserted  sucessfully";
}
else 
{
    echo "Data  was not inserted sucessfully because of this error" . mysqli_connect_error($conn);
}
?>