<!DOCTYPE html>
<html>
<head>
    <title></title>

    <?php
include("header.php")
    ?>






<div id="id02" class="my-modal">
  
  <form    action="index.php" class="modal-content animate">
    <div class="imgcontainer1">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
    </div>

    <div class="container1">
      <label for="uname"><b>Slapyvardis</b></label>
      <input type="text" placeholder="Įveskite slapyvardį" name="uname" required>

      <label for="psw"><b>Slaptažodis</b></label>
      <input type="password" placeholder="Įveskite slaptažodį" name="psw" required>
        
      <button type="submit">Prisijungti</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Atsiminti mane
      </label> -->
    </div>

    <div class="container1">
      <a href="index.php"><button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Atšaukti</button></a>
     <!--  <span class="psw">Pamiršai <a href="#">slaptažodį?</a></span> -->
    </div>
  </form>
</div>

</body>
</html>
