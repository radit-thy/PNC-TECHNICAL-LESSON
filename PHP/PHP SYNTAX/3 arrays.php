<!-- In PHP, there are three types of arrays:
    - Indexed arrays - Arrays with a numeric index
    - Associative arrays - Arrays with named keys
    - Multidimensional arrays - Arrays containing one or more arrays 
-->

<!-- Indexed arrays: -->
<?php 
    $cars = ["Volvo", "BMW", "Toyota"];
    for($x = 0; $x < count($cars); $x++) {
        echo $cars[$x] . "\n";
    }
?>
?>

<!-- Associative arrays: -->
<?php 
    $trainers = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
    foreach($trainers as $x => $x_value) {
        echo "The student name " . $x . "is " . $x_value." years old.\n";
    }
?>

<!-- Multidimensional arrays: (array 2D) -->
<?php 
    $reports = [
        ["Volvo",22,18],
        ["BMW",15,13],
        ["Land Rover",17,15]
    ];
    foreach($reports as $report){
        echo "$report[0]: in stock: $report[1], sold out: $report[2]\n";
    }
?>

