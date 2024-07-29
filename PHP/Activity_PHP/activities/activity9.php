<?php
    $wep = ["Ronan", "Him", "Rady", "Hyacinthe", "Ratha"];

    // Use a FOR EACH loop to display the names of WEP trainers
    foreach($wep as $index   => $value)  {
        echo "Teacher $value is in index : $index"."\n";
    }
    $index = 0;

    foreach($wep as $value)  {
        echo "Teacher " . $value . " is in index : $index"."\n";
        $index++;
    }
 
?>