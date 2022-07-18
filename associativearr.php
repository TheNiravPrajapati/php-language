<?php
// associative array 
// it is done with this  "=>"

$favcol = array(
                    'Rohan' => 'red',
                    'Grishma' => 'green',
                    'Nirav' => 'blue'
                );
echo  $favcol['Grishma'] . "<br>";
echo  $favcol['Nirav'] . "<br>";
foreach ($favcol as $key => $value) {
    echo "Favorite color of $key is $value <br>";
}
?>