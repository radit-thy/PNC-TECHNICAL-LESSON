<?php
    // Just try to execute this file !
    echo "You can now execute PHP programs from a file !";


$numbers = [1, 2, 3, 4];

for ($i=0; $i < count($numbers); $i++) { 
    echo $numbers[$i];
}

$i = 0;
while ($i < count($numbers)) {
    echo $numbers[$i];
    $i++;
}
