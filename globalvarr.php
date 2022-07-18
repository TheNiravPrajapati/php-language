<?php

//Global variable in PHP
$a = 900;

function printval($var){
    global $a ; // This is the global variable 
    // $a = 90; // This the variable for the function 
    echo "The value is $a";
}
echo "$a";
printval($a);


//if u want to print the global variables the use $GLOBALS["variablename"] 
?>