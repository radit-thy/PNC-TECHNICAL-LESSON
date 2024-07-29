<?php
    $wep = ["Ronan", "Him", "Rady", "Hyacinthe", "Ratha"];

    // Use a FOR loop to display the names of WEP trainers
    for ($i = 0; $i <count($wep); $i++) :
        echo "Teacher " . $wep[$i] . " is in index : " . $i;
        echo "\n";
    endfor
?>