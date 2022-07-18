<?php

//FUNCTIONS 

function processMarks($marksar)
{
    $sum = 0;
    foreach ($marksar as $value) {
        $sum += $value; 
    }
    return $sum;
}
$nirav = [94, 89, 94, 55, 87];
$summarks = processMarks($nirav);
echo "TOTAL marks of Niravout of 500 is $summarks ";
?>