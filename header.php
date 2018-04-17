
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>




<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prisijungimai";

		// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
if (!$conn) {

	die("Connection failed: " . mysqli_connect_error());
}

		//echo "";
mysqli_set_charset($conn,"utf8");



if (!empty($_GET)) {

	if (isset($_GET["user"])){


		if($_GET["user"]=="logout"){
			unset($_SESSION["uzerneimas"]);
		}

	} else if (isset($_GET["uname"]) && isset($_GET["psw"])) {

		$sql = "SELECT slapyvardis, slaptazodis FROM login WHERE slapyvardis = '" . $_GET["uname"] . "' AND slaptazodis = '" . $_GET["psw"] . "'";

	    		// SELECT slapyvardis, slaptazodis FROM login WHERE slapyvardis = 'asd' AND slaptazodis = '123'

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "Sekmingai prisijungėte!";



			$_SESSION["uzerneimas"] =  $_GET["uname"];



		} else {
			echo "Klaidingas slapyvardis arba slaptažodis. Bandykite dar kartą";
		}
	}


}
?>




</head>
<body>

	<nav>
		<div class="nav-wrapper">

			<a href="index.php" ><img class="brand-logo" src="img/vcs.png"><img class="brand-logo2" src="img/news.png"></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="index.php">Pagrindinis</a></li>
				<li><a href="orai.php">Orai</a></li>
				<li><a href="kriminalainews.php">Kriminalai</a></li>
				<li><a href="technologijosnews.php">Technologijos</a></li> 	



				<?php 
				if (isset($_SESSION["uzerneimas"])) {


 	// if(){
 	// unset($_SESSION["uzerneimas"])
 	// }


				}

				if (isset($_SESSION["uzerneimas"])) {

					echo  "Sveiki, " . $_SESSION["uzerneimas"];
					echo '<li> <a class="btn" href="index.php?user=logout">Atsijungti</a></li>';


				} else {

					echo '<li> <a class="btn" href="login.php">Prisijungimas</a></li>';
					echo '	<li> <a class="btn" href="registracija.php">Registracija</a></li>';
				} 

				?>



			</ul> 
		</div>   
	</nav>

