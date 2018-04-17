

<footer class="page-footer">
  <div class="container">

    <div class="row no-b-margin">

      <div class="col l3 s12" style="padding-top: 50px;">
        <h6 class="white-text">Kontaktai:</h6>
        <p class="grey-text text-lighten-4">Tel: +37066223322</p>
        <a href="mailto: vcsfakenews@vcs.lt">
          <p class="grey-text text-lighten-4">Email: vcsfakenews@vcs.lt</p>
        </a>
        <p>Adresas: Ulonų g. 5, Vilnius</p>
      </div>
      <div class="col l5 s12" style="padding-top: 50px;">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.984719730503!2d25.290128115890298!3d54.709891980287324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96ae1dedd637%3A0x73978617430c730c!2sUlon%C5%B3+g.+5%2C+Vilnius+08240!5e0!3m2!1slt!2slt!4v1522420912750" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col l4 s12" style="padding-top: 10px;">
        <h6 class="white-text">Naujienlaiškių prenumerata:</h6>
        <div class="simple-subscription-form">


<?php


        
    if (!empty($_GET)) {
      if (isset($_GET["elpastas"])) {

      if ($_GET["elpastas"] != "") {

        $sql_insert = "INSERT INTO prenumeruok (email) VALUES ('" . $_GET["elpastas"] . "')";

        if (mysqli_query($conn, $sql_insert)) {
            echo "Ačiū! Laukite musų naujienų.";
        } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
        }

      } else {

        echo "Kažkas blogai";
      }
    }
    }

?>
          <form>

            <div class="input-group">
              <span class="input-group-label">
                <i class="fa fa-envelope"></i>
              </span>
              <input class="input-group-field" type="email" name="elpastas" placeholder="Email" required>
              <button class="button">Prenumeruok</button>
            </div>
            </form>


          <ul class="social" style="list-style-type: none;">
            <li><a class="so" href="https://facebook.com"><img src="img/facebook.png" height="40" ></a>
              <a class="so" href="https://twitter.com"><img src="img/twiter.png" height="40" ></a>
              <a class="so" href="https://instagram.com"><img src="img/instagram.png"  height="40" ></a></li>
            </ul>
          </div>

        </div>

      </div>
      <div class="footer-copyright">
        <div class="container">
          <hr style="margin-bottom: 0px;">
          <h6 style="text-align: center;">© 2018 Copyright. Visos teisės saugomos.</h6>
        </div>
      </div>
    </footer>

  