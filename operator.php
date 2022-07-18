<?php

$a = 50;
$b = 50;

// arathmatic operators 
echo "A + B = " . ($a + $b);
echo "<br>";
echo "A - B = " . ($a - $b);
echo "<br>";
echo "A X B = " . ($a * $b);
echo "<br>";
echo "A / B = " . ($a / $b);
echo "<br>";
echo "A % B = " . ($a % $b);
echo "<br>";
echo "A ** B = " . ($a ** $b);
echo "<br>";
//assignment operator 
$x = $a;
echo "The value of x is eqaul to a " . $x ."<br>";
$x += 6;
echo "The value of a +  6 is " . $x ."<br>";
$x -= 6;
echo "The value of a -  6 is " . $x ."<br>";
$x *= 6;
echo "The value of a *  6 is " . $x ."<br>";
$x /= 6;
echo "The value of a / 6 is " . $x ."<br>";
$x %= 6;
echo "The value of a %  6 is " . $x ."<br>";
//comparsion operator 
// ==
// !=
// a < b
// a > b
echo "For A == B the result is " . ($a == $b) . "<br>";
?>