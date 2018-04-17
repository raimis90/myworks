<!DOCTYPE html>
<html>
<head>
  <title></title>

<?php
include("header.php");
?>















<div id="id01" class="my-modal input-group">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content">
    <div class="container3">
      <h2>Registracija</h2>
      <!-- <p>Please fill in this form to create an account.</p> -->
      <hr>
      <label for="uname"><b>Slapyvardis</b></label>
      <input type="text" placeholder="" name="uname" required>

      <label for="psw1"><b>Slaptažodis</b></label>
      <input type="password" placeholder="" name="psw1" required>

      <label for="psw-repeat"><b>Pakartoti slaptažodį</b></label>
      <input type="password" placeholder="" name="psw-repeat" required>
      
       <!--  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p> -->

      <div class="clearfix">
         <a href="index.php"><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Atšaukti</button></a>
        <button type="submit" class="signupbtn">Registruotis</button>


      </div>
    </div>
  </form>




</div>

</body>
</html>
