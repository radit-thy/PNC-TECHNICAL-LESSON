<!-- 
Function defining:
To define a function in PHP, you use the function keyword, followed by the function
name and a pair of parentheses. Any parameters the function takes are listed inside the 
parentheses, and the function body is enclosed in curly braces. 
-->
<?php
function myFunction($param1, $param2) {
    // Function body
    // Code to be executed
}
?>


<!-- 
Function calling:
To call a function, you simply use its name followed by a pair of parentheses. If the function 
has parameters, you pass values inside the parentheses. 
-->

<?php
myFunction($value1, $value2);
?>


<!-- 
Function parameters:
Functions can accept parameters, which are values passed to the function when it is called. 
These parameters are specified in the function definition and used within the function body.
-->

<?php
    function add($num1, $num2) {
        $sum = $num1 + $num2;
        echo "Sum: " . $sum;
    }

    add(5, 10); // Outputs: Sum: 15
?>

<!-- 
Function value return:
Functions can return values using the return statement. The calling code can then use the returned value.
-->

<?php
    function multiply($num1, $num2) {
        $result = $num1 * $num2;
        return $result;
    }

    $product = multiply(3, 4);
    echo "Product: " . $product; // Outputs: Product: 12
?>
<!-- 
Default Parameter Values:
You can provide default values for function parameters. If a value is not passed for a parameter when the 
function is called, the default value is used. 
-->

<?php
    function greet($name = "Guest") {
        echo "Hello, $name!";
    }

    greet();       // Outputs: Hello, Guest!
    greet("John"); // Outputs: Hello, John!
?>

