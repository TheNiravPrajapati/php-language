<?php

$fptr = fopen("myfile.txt", "r");

// one fgets() reads only one line from the file  
echo fgets($fptr);
echo fgets($fptr);


// we can read all the line from the file with the while loop given below 
while($a = fgets($fptr)){
    echo $a;
}

// fgetc() reads only character from the file 
// reading a file character by character by while loop 
while($a = fgetc($fptr))
{
    echo $a;
}

// a program which reads the content of a file untill it dosent get the fullstop

while($a = fgetc($fptr))
{
    echo $a;
    if($a == ".")
    {
        break;
    }
}

// file must being closed after work done with fclose()
fclose($fptr)
?>