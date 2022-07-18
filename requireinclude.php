<?php

//In include the error not disturbed in the rest of the code
include 'dbconnect.php'; 
//In Require the error disturbed in the rest of the code
require 'dbconnect.php';

$sql = "SELECT* FROM `trip`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;
echo "Record found in the database <br>";

while($row = mysqli_fetch_assoc($result))
{
    echo $row['sno'] . "Hello" . $row['name'] . "Welcome to" . $row['dest'] . "<br>";

}


?>