<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First HTML from PHP</title>
</head>

<body>
    <!-- We can use PHP to generate a HTML document !
    Instructions:
    - execute this file with php
    - what is the output ?
    - copy-paste the output in a new file index.html
    - open this new file in chrome
    -->
    
    <h1>Welcome to my first HTML page generated with PHP templating</h1>

    <div>
    This text is regular HTML
    </div>

    <div>
    <?php
        echo "This text is generated from PHP !";
    ?>

    <div>

</body>

</html>