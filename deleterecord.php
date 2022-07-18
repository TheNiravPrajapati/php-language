<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbnirav";
$conn = mysqli_connect($servername, $username, $password, $database); 

if(!$conn){
    die("Sorry failed to connect". mysqli_connect_error());
}
else{
    echo "connectinon was sucessfully <br>";
}
// This is the query of delete 
$sql = "DELETE FROM `trip` WHERE `dest` = 'Englan'";
//Limit is use to set the limit of deleting  
$sql = "DELETE FROM `trip` WHERE `dest` = 'Englan' LIMIT 4";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "<br> Number of rows affected <br> $aff";


if($result)
{
    echo "<br>Deleted Sucessfully";
}
else 
{
    $err = msqli_error($conn);
    echo  "<br>Not Deleted sucessfully due to this error --> $err"; 
}
?>