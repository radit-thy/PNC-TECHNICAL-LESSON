<!-- 
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) 
-->

<!-- 
CONSTANT VARIABLES
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Note: Unlike variables, constants are automatically global across the entire script.

We can create constant variables in two ways:
    - use define() function
    - use keyword const 

note: remember you should always create constants name with capitalization
*/ -->


<?php 
    // variable with data type 
    $name = "Mengheang"; //string
    $age = 22; //integer
    $height = 1.78." cm"; //float
    $isAvailable = TRUE; //boolean
    $teaching = ["WEB DESIGN", "JAVASCRIPT","PHP"]; //array
    $moreInfo = ["fvr"=>"sleep","habit"=>"sleep"]; //associative array

    // constant variable
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    const MYCAR = "Volvo";
    echo MYCAR;
?> 