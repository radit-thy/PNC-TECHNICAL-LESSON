<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixing languages</title>

    <!-- Lets mix HTML, CSS, Javascript and PHP in the same file ! -->
    <style>
        .choice {
            color:blue
        }
    </style>
</head>

<body>

    <?php
    // An array of fruits
    $array = ['mango', 'apple', 'banana'];
    ?>

    <form>

        <?php
        for ($i = 0; $i < count($array); $i++) :
        ?>
         <input class="<?php echo "choice"?>" type="radio" name="radio" checked />
         <label><?php echo $array[$i]?></label>

        <?php
        endfor
        ?>

        <button type="submit" id="submit_btn">Submit</button>
    </form>

    <div>
        <p id='result'></p>
    </div>

    <script>
        function showFruits(event) {
            event.preventDefault();
            let radio = document.getElementsByClassName('choice');
            for (let index = 0; index < radio.length; index++) {
                if (radio[index].checked) {
                    // In javascript, Display the name of the checked fruit in p#result element
                }
            }
        }

        let submitBtn = document.getElementById("submit_btn");
        submitBtn.addEventListener("click", showFruits);
    </script>

</body>

</html>