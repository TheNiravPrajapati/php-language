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

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

// display the rows 
if($num > 0){
    //This is the way to fetch the data one by one 
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //Now we fetch the data  using loop'
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno']. ".Hello ". $row['name']."Welcome to" . $row['dest'];
        echo"<br>";
    }
}
?>