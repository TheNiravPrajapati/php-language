<?php

$ftpr = fopen("myfile.txt", "r");
// echo  $ftpr;
if(!$ftpr)
{
    die("Unable to open this file Pls enter valid file name");
}

//fopen is used to open the file in the server 
// fread() is used to read the file 
//filesize() is used t find the length of file 
$content = fread($ftpr, filesize("myfile.txt"));
echo $content;

// fclose() is used to close the file in the server
fclose($ftpr);
?>