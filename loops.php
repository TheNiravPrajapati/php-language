<?php 
//WHILE LOOPS 
echo "While loop in php <br>";
$i = 0;
while($i<=5)
{
    echo "NIRAV PRAJAPATI";
    echo "<br>";
    $i++;
}
//FOR LOOPS 
echo "FOR loop in php <br>";

// $j = 0;
for( $j=0; $j<=5; $j++)
{
    echo "Nirav Prajapati <br>";
}

// DO WHILE LOOP

do
{
    echo "HO GAIYA <br>";
}
while($i<=5);
{
    echo "NIRAV PRAJAPATI";
    echo "<br>";
    $i++;
}

//FOR EACH LOOOP
echo "FOREACH LOOP <br>";
$a = array("APPLE", "BANANA", "ORANGE ");
foreach($a as $value )
{
    echo "$value <br>";
}
?>