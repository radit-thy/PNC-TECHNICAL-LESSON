 <!-- HEADER -----------------------------------------  -->
 <?php
   require_once('template/header_certifcate.php');
  ?>
 <!-- MAIN -----------------------------------------  -->
 <main>
   <div class="header">
      <h1>CERTIFICATE</h1>
   </div>
   <div class="the_image">
    <img src="image/pic1.png" alt="img">
    <img src="image/pic1.png" alt="img">
   </div>
  <?php
  // print_r($_POST);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST["name"])) {
          echo "<h1>"."THANKS " . $_POST["name"] ."</h1>";
      }
      if (isset($_POST["option"])) {
          echo "<h2>" ."Your club is " . $_POST["option"] ."</h2>";
      }
      if (isset($_POST["day"])) {
          echo "<h3>" ."Your day is " . $_POST["day"] ."</h3>";
      }
      if (isset($_POST["skill"])) {
          $skills = $_POST["skill"];
          
      }foreach($skills as $skill){
        echo "Your skills is: " .$skill ;
      }
    }
  ?>
 </main>

 <!-- FOOTER -----------------------------------------  -->
 <?php
   require_once('template/footer.php');
  ?>