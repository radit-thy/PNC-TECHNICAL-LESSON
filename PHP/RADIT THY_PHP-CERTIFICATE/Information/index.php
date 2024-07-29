 <!-- HEADER -----------------------------------------  -->
 <?php
   require_once('template/header_form.php');
   ?>

 <!-- MAIN -----------------------------------------  -->
 <main>
   <div class="header">
      <h1>PNC CLUB</h1>
   </div>
   <div class="form">
   <form action="certificate.php" method="post">
      <label>Name:</label>
      <input type="text" name="name"></input>
      <label>Club Apply:</label>
      <div>
         <select id="#" name="option">
            <option>Choose Club</option>
            <option name="club" value="Music">Music</option>
            <option name="club" value="Singer">Singer</option>
            <option name="club" value="Photography" >Photography</option>
            <option name="club" value="Robotic">Robotic</option>
            <option name="club" value="More...">More...</option>
         </select>
      </div>
      <label>Be time for you:</label>
      <div class="radio-chiose">
         <label>
            <input type="radio" name="day" value="Monday" />Monday
         </label>
         <label>
            <input type="radio" name="day" value="Tuesday" />Tuesday
         </label>
         <label>
            <input type="radio" name="day" value="Sunday" />Sunday
         </label>
      </div>
    <label>Your Skills:</label>
    <div class ="all-skills">
         <div class="skill-1">
            <label>
               <input type="checkbox" name="skill[]" value="Singer well"/>Singer well
            </label>
            <label>
               <input type="checkbox" name="skill[]" value="Good dancing" />Good dancing
            </label>
            <label>
               <input type="checkbox" name="skill[]" value="The best code" />The best code
            </label>
            <label>
               <input type="checkbox" name="skill[]" value="Good in sleep" />Good in sleep
            </label>
         </div>
         <div class="skill-2">
            <label>
               <input type="checkbox" name="skill[]" value="Good communicate" />Good communicate
            </label>
            <label>
               <input type="checkbox" name="skill[]" value="Play football" />Play football
            </label>
            <label>
               <input type="checkbox" name="skill[]" value="Good music" />Good music
            </label>
            <label>
               <input type="checkbox" name="skill[]" value="Good super star" />Good super star
            </label>
         </div>
      </div>
      <div class="btn">
         <button type="submit">SUBMIT</button>
      </div>
   </form>
 </main>

 <!-- FOOTER -----------------------------------------  -->
 <?php
   require_once('template/footer.php');
   ?>