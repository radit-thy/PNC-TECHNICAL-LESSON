<!-- HEADER -----------------------------------------  -->
<?php
require_once('templates/header.php');
?>

<!-- MAIN -----------------------------------------  -->
<div class="main-content">
    <main>
        <?php

        // 0 - We set the  path by default to home
        $path = 'pages/home.php';

        // 1 - Check if a page parameter is defined in the URL  
        if (isset(XXXXXXXXXX)) {

            // 2 If yes : compute the PATH of the page  (example :  pages/students.php)
            $pageFile = XXXXXXXXXX;

            // 3 Check if the file exists, you can use file_exists() with the path computed above
            if (XXXXXXXXXX) {
                $path = $pageFile;
            }
        }

        // 4 Require the PATH of the page
        XXXXXXXXXX
        ?>

    </main>
</div>

<!-- FOOTER -----------------------------------------  -->
<?php
require_once('templates/footer.php');
?>