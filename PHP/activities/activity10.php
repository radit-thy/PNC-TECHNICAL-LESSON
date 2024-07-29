<?php
    $numbers = [5, 3, 4, 0, 5, 1];

    // Use a WHILE loop to display the numbers until it is a 0 (so display 5, 3, 4 only)

    $i = 0;
    $isTrue = true;
    while ($isTrue = true){
        if ($numbers[$i] != 0){
            echo $numbers[$i];

        }else{
            $isTrue = false;
        }
    }
    $i ++;

 


    
?>