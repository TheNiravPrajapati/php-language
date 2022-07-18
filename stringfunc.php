<?php 


//string functions 
$name = "Nirav";
echo $name ;
echo "<br>";
//strlen is used to find the length of the string 
// . is used to joint two string in echo 
echo "Length f my string is " . strlen($name);
echo "<br>"; 

// str-word-count is used to cound the word on the string 
echo "This is the word count on my string is " . str_word_count($name);
echo "<br>";

//strrev is used to reverse the string 
echo "This is the reverse of m string " . strrev($name);
echo "<br>";

//strpos is used to search the character in the string 
echo "This is the location of R in string is " . strpos($name, "r" );
echo "<br>";

// str-replace  is used to replace the word 
echo "This is the replace of my string " . str_replace("Nirav", "Prajapati ", $name );
echo "<br>";

// str-repeat is used to repeat the string 
echo str_repeat($name , 10);
echo "<br>";

//rtrim is used to  trim the string 
echo "This is the trim of the string " . rtrim("<pre>   Nirav   </pre>")
?>