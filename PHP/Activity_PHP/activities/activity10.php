<?php
    $numbers = [5, 3, 4, 0, 5, 1];

    // Use a WHILE loop to display the numbers until it is a 0 (so display 5, 3, 4 only)
   $i=0;
   $istrue=true;
   while ( $istrue){
    if($numbers[$i]!=0){
        echo $numbers[$i];

   }else{
    $istrue=false;
   }  
   $i++;
    }
    $index = 0;
    while($numbers[$index]!= 0){
     echo $numbers[$index];
     $index++;
    }
?>