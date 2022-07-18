<?php
// multi dimentional array
$arr = array(
    array(2,5,7,8),
    array(1,4,6,7),
    array(0,3,5,6),

);

// echo var_dump($arr) . "<br>";
// echo $arr[0][1];
// echo "<br>";


//Display Matrix    
for ($i=0; $i < count($arr) ; $i++) { 
    for ($j=0; $j < count($arr[$i]) ; $j++) { 
        echo $arr[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>