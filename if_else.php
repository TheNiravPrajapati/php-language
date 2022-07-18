<?php 
// if else conditions 
$a = 50;
$b = 100;
if($a > 48)
{
    echo "A is greater than 48 ";
}
else
{
    echo "A is not greater than 48";
}
echo "<br>";
//nested IF ELSE  condition 

$age = 5;
if( $age > 18)
{
    echo "U can Drink";
}
else if($age > 13)
{
    echo "u cannot drink";
}
else
{
    echo "Khali pani pe ji  bhai ";
}
echo "<br>";

//Quiz 

$Dage = 26;
if($Dage > 25)
{
    echo "U can Drive";
}
else if ($age < 65)
{
    echo "U cannnot drive ";
}
else if ($Dage < 18)
{
    echo "U cannot drive";
}
else 
{
    echo  "Tu Ghar pe hi Bhet bhai";
}

?>