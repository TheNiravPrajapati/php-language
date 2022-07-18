<?php

$ftpr = fopen("myfile2.txt", "w");
// fwrite is used to write data in the file 
fwrite($ftpr, "This is the best file in the planet \n");
fwrite($ftpr, "and planet name is earth  \n ");
fclose($ftpr);

// append mode 
$ftpr = fopen("myfile2.txt", "a");
fwrite($ftpr,"This file isn being appended");
fclose($ftpr);
?>