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

$sql = "SELECT * FROM `trip` WHERE `dest`='Canada'";
$result =  mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num;
echo  "records found in the database <br>";
$no = 1 ;
if($num>0){
    while($row = mysqli_fetch_assoc($result))
    {
        echo $no . "Hello" . $row['name'] . "Welcome to" . $row['dest'];
        $no = $no + 1 ;
    }
}

//Upadate query
// Update the name 
$sql = "UPDATE `trip` SET `name` = 'Nirav2' WHERE `sno` = 1";  
// update the destination
$sql = "UPDATE `trip` SET `dest` = 'delhi' WHERE `sno` = 1";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Data updated sucessfully";
}
else{
    echo "Data is not updated sucessfully";
}

?>